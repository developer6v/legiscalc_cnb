jQuery(document).ready(function($){
    $(document).on('click', '.addInputValueDivorcio', function(event){
        var singleValue =  $(this).parent().find('.valueDivorcio').val();
        if (singleValue == '') {
            alert('O valor não pode estar vazio!');
            return;
        }
        // Esconde o elemento que foi clicado
       $(this).hide();
        var quantidadeValores = $('.valueDivorcioDiv').length + 1;
        var divToAppend = "<div class='valueDivorcioDiv'>" +
            "<div class='lineValueDivorcio'>" +
                "<label>Valor do bem " + quantidadeValores + "</label>" +
                "<p>R$</p>" +
                "<input class='valueDivorcio valuesInputDivorcio' type='text' value = '0,00'>" +
                " <p class='addInputValueDivorcio'>Outro imóvel</p>" +
            "</div>" +
        "</div>";
        $('.valuesDivorcioDiv').append(divToAppend);
    });



    $('.buttonCalcDivorcio').click(async function(event) {
        event.preventDefault(); 


        if ($('#userName_input').val() == '') {
            alert('O campo "Nome" deve ser preenchido!');
            return;
        }
        if ($('#whatsapp_input').val() == '') {
            alert('O campo "WhatsApp" deve ser preenchido!');
            return;
        } 
        const type = $('#services_LegisCalc').val();
        var valorTotal = 0;
        $('.valueDivorcio').each(function() {
            var valor = parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
            if (!isNaN(valor)) { 
                valorTotal += valor;
            } 
        });



        if (type == 'Com bens a partilhar') {
            response = await bensIndividualizados(valorTotal);
        } else if (type == 'Em frações ideais idênticas') {
            response = await fracoesIdenticas();
        } else if (type == 'Sem bens a partilhar') {
            response = await semBensAPartilhar();
        }


        var emolumento = response['emolumento'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var frj = response['frj'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var issqn = response['issqn'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var total = response['total'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ?? null;

        // mostrar os valores na tela
        $('#emolumento').text("R$ " + emolumento);
        $('#frj').text("R$ " + frj);
        $('#issqn').text("R$ " + issqn);
        $('#total').text("R$ " + total);
        $('#divorcioArtigoP').text("§ 2º do art. 44 da Lei Complementar 755/2020.");

        $('#divResultCalc').css("display", "block").show();
        $('.overlay').show();
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
        
        
        let emolumento = response.emolumento;
        let frj = response.frj;
        let issqn = response.issqn;
        let total = response.total;

    
        return {
            emolumento: emolumento,
            frj: frj,
            issqn: issqn,
            total: total
        };
    } 
    


    async function bensIndividualizados(valorTotal) {

        let emolumento = 0;
        let frj = 0;
        let issqn = 0;
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
            issqn = response.issqn;
            total = response.total;

        } else {
            const requests = $('.valueDivorcio').map(function() {
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
                        issqn += response.issqn;
                        total += response.total;
                    });
                }
            }).get();
            await Promise.all(requests);

        }

        return {
            emolumento: emolumento,
            frj: frj,
            issqn: issqn,
            total: total
        };
    }



    async function fracoesIdenticas() {
        let emolumento = 0;
        let frj = 0;
        let issqn = 0;
        let total = 0;
        let valorTotal = 0;
    
        const valorInputs = $('.valueDivorcio').map(function() {
            return parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
        }).get();
    
        for (let i = 0; i < valorInputs.length; i++) {
            valorTotal += valorInputs[i] / 2;
        }
    
        console.log('valor total: ' + valorTotal);
    
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
            issqn = response.issqn;
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
                        issqn += response.issqn;
                        total += response.total;
                    });
                }
            });
    
            await Promise.all(requests);
        }
    
        return {
            emolumento: emolumento,
            frj: frj,
            issqn: issqn,
            total: total
        };
    }
    



    // mascara inputs values
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
        // Formata os decimais
        let formattedValue = (intValue / 100).toFixed(2);
        formattedValue = formattedValue.replace('.', ',');
        let parts = formattedValue.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        formattedValue = parts.join(',');
        $(this).val(formattedValue);
    });

    $('#services_LegisCalc').change(function(event){
        if ($(this).val() == "Sem bens a partilhar") {
            $('.valuesDivorcioDiv').hide();
        } else {
            $('.valuesDivorcioDiv').show();
        }
    });
});