jQuery(document).ready(function($){
    
    // Adicionar novo campo de valor (isolado por container)
    $(document).on('click', '.addInputValueInventario', function(event){
        var singleValue =  $(this).parent().find('.valueDivorcio').val();
        if (singleValue == '') {
            alert('O valor não pode estar vazio!');
            return;
        }
        
        $(this).hide();
        let calcContainer = $(this).closest('.calcDiv');
        var quantidadeValores = calcContainer.find('.valueDivorcioDiv').length + 1;
        
        var divToAppend = "<div class='valueDivorcioDiv'>" +
            "<div class='lineValueDivorcio'>" +
                "<label>Valor do bem " + quantidadeValores + "</label>" +
                "<p>R$</p>" +
                "<input class='valueDivorcio valuesInputDivorcio' type='text' value = '0,00'>" +
                " <p class='addInputValueInventario'>Outro imóvel</p>" +
            "</div>" +
        "</div>";
        
        calcContainer.find('.valuesDivorcioDiv').append(divToAppend);
    });

    // Botão Calcular (isolado por container)
    $(document).on('click', '.buttonCalcInventario', async function(event) {
        event.preventDefault(); 
        
        let calcContainer = $(this).closest('.calcDiv');

        if (calcContainer.find('#userName_input_inventario').val() == '') {
            alert('O campo "Nome" deve ser preenchido!');
            return;
        }
        if (calcContainer.find('#whatsapp_input_inventario').val() == '') {
            alert('O campo "WhatsApp" deve ser preenchido!');
            return;
        } 
        
        const type = calcContainer.find('#services_inventarioCalc').val();
        var valorTotal = 0;
        
        calcContainer.find('.valueDivorcio').each(function() {
            var valor = parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
            if (!isNaN(valor)) { 
                valorTotal += valor;
            } 
        });

        let response; 

        if (type == 'De bens individualizados') {
            response = await bensIndividualizados(valorTotal, calcContainer);
        } else if (type == 'Em frações ideais idênticas') {
            response = await fracoesIdenticas(calcContainer);
        } else if (type == 'Sem bens a partilhar') {
            response = await semBensAPartilhar();
        }

        if (!response) {
            console.error("Erro: O tipo de partilha não foi reconhecido. Valor lido:", type);
            alert("Houve um erro ao identificar a opção de cálculo.");
            return;
        }

        var emolumento = response['emolumento'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var frj = response['frj'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var total = response['total'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ?? null;

        calcContainer.find('#emolumento').text("R$ " + emolumento);
        calcContainer.find('#frj').text("R$ " + frj);
        calcContainer.find('#total').text("R$ " + total);
        calcContainer.find('#divorcioArtigoP').text("§ 2º do art. 44 da Lei Complementar 755/2020.");

        calcContainer.find('#divResultCalc').css("display", "block").show();
        calcContainer.find('.overlay').show();
        
        $(document).trigger("calculationCompleted");        
    });

    async function semBensAPartilhar() {
        let response = await $.ajax({
            url: baseUrl + 'src/controllers/calculatorDivorcio.php',
            type: 'POST',
            dataType: 'json', 
            data: {
                type: 'Sem bens a partilhar',
                planilha: 'individual'
            }
        });
        
        return {
            emolumento: response.emolumento,
            frj: response.frj,
            total: response.total
        };
    } 
    
    // Passamos o calcContainer para ele ler apenas os inputs certos
    async function bensIndividualizados(valorTotal, calcContainer) {
        let emolumento = 0;
        let frj = 0;
        let total = 0;
        var valueSoma = 0;

        if (valorTotal <=  503267.98) {
            let response = await $.ajax({
                url: baseUrl + 'src/controllers/calculatorDivorcio.php',
                type: 'POST',
                dataType: 'json', 
                data: {
                    value: valorTotal,
                    type: 'De bens individualizados',
                    planilha: 'individual'
                }
            });
           
            emolumento = response.emolumento;
            frj = response.frj;
            total = response.total;

        } else {
            const requests = calcContainer.find('.valueDivorcio').map(function() {
                const inputValue = parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
                valueSoma += inputValue;
                if (inputValue != 0) {
                    return $.ajax({
                        url: baseUrl + 'src/controllers/calculatorDivorcio.php',
                        type: 'POST',
                        dataType: 'json', 
                        data: {
                            value: inputValue,
                            type: 'De bens individualizados',
                            planilha: 'item_por_item'
                        }
                    }).then(response => {
                        emolumento += response.emolumento;
                        frj += response.frj;
                        total += response.total;
                    });
                }
            }).get();
            await Promise.all(requests);
        }

        return {
            emolumento: emolumento,
            frj: frj,
            total: total
        };
    }

    // Passamos o calcContainer para ele ler apenas os inputs certos
    async function fracoesIdenticas(calcContainer) {
        let emolumento = 0;
        let frj = 0;
        let total = 0;
        let valorTotal = 0;
    
        const valorInputs = calcContainer.find('.valueDivorcio').map(function() {
            return parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
        }).get();
    
        for (let i = 0; i < valorInputs.length; i++) {
            valorTotal += valorInputs[i] / 2;
        }
    
        if (valorTotal <= 503267.98) {
            let response = await $.ajax({
                url: baseUrl + 'src/controllers/calculatorDivorcio.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    value: valorTotal,
                    type: 'Em frações ideais idênticas',
                    planilha: 'individual'
                }
            });
    
            emolumento = response.emolumento;
            frj = response.frj;
            total = response.total;
        } else {
            const requests = valorInputs.map(inputValue => {
                inputValue /= 2;
                if (inputValue !== 0) {
                    return $.ajax({
                        url: baseUrl + 'src/controllers/calculatorDivorcio.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            value: inputValue,
                            type: 'Em frações ideais idênticas',
                            planilha: 'item_por_item'
                        }
                    }).then(response => {
                        emolumento += response.emolumento;
                        frj += response.frj;
                        total += response.total;
                    });
                }
            });
    
            await Promise.all(requests);
        }
    
        return {
            emolumento: emolumento,
            frj: frj,
            total: total
        };
    }

    // Mascara inputs values
    $(document).on('input', '.valueDivorcio', function(event) {
        let value = $(this).val().replace(/[^\d,]/g, ''); 
        value = value.replace(/,/g, '');
        if (value.length === 0) {
          value = '0';
        }
        let intValue = parseInt(value);
        if (isNaN(intValue)) {
          intValue = 0;
        }
        let formattedValue = (intValue / 100).toFixed(2);
        formattedValue = formattedValue.replace('.', ',');
        let parts = formattedValue.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        formattedValue = parts.join(',');
        $(this).val(formattedValue);
    });

    // Evento de mudança no Select (isolado por container e com novo ID)
    $(document).on('change', '#services_inventarioCalc', function(event){
        let calcContainer = $(this).closest('.calcDiv');
        if ($(this).val() == "Sem bens a partilhar") {
            calcContainer.find('.valuesDivorcioDiv').hide();
        } else {
            calcContainer.find('.valuesDivorcioDiv').show();
        }
    });
});