jQuery(document).ready(function($){
    // gerencia o calculo das taxas
    $('.buttonCalc').click(async function(event){
        event.preventDefault();
        $('#divResultCalc').hide();
        $('.overlay').hide();
        if ($('#userName_input').val() == '') {
            alert('O campo "Nome" deve ser preenchido!');
            return;
        }
        if ($('#whatsapp_input').val() == '') {
            alert('O campo "WhatsApp" deve ser preenchido!');
            return;
        }
        // função dos atos
        var type = $('#services_LegisCalc').find(':selected').data('type') ?? null;
        if (type == 'value_needed') {
            var service = $('#services_LegisCalc').val();
            console.log('sercice' + service);
            var valuesResult = await taxesCalculatorWithValue(service);
        } else if (type == 'value_not_needed'){
            var valuesResult = taxesCalculatorWithoutValue();
        } else if (!type) {
            alert('Selecione algum serviço!');
            return;
        }
        var value = valuesResult['value'] ?? null;
        if (value < 0 || value == '' ) {
            alert("Valor inválido.");
            return;
        }
        var emolumentoValue = valuesResult['emolumento'];
        var frjValue = valuesResult['frj'];
        var issqnValue = valuesResult['issqn'];
        var totalValue = valuesResult['total'] ?? null;
        $('#emolumento').text("R$ " + emolumentoValue.toFixed(2).replace('.', ','));
        $('#frj').text("R$ " + frjValue.toFixed(2).replace('.', ','));
        $('#issqn').text("R$ " + issqnValue.toFixed(2).replace('.', ','));
        $('#total').text("R$ " + totalValue.toFixed(2).replace('.', ','));
        $('#divResultCalc').css("display", "block").show();
        $('.overlay').show();
        $(document).trigger("calculationCompleted");        
    });



    // função para calcular as taxas que tem input valor
    async function taxesCalculatorWithValue(service) {
        var value = 0;
        $('.valueCalc').each(function() {
            var valor = parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
            if (!isNaN(valor)) { 
                value += valor;
            } 
        });
        try {
            let response = await $.ajax({
                url: baseUrl + 'src/controllers/calculator.php',
                type: 'POST',
                dataType: 'json', 
                data: {
                    value: value,
                    service: service
                }
            });
            return {
                emolumento: response.emolumento,
                frj: response.frj,
                issqn: response.issqn,
                total: response.total,
                value: value
            };
        } catch (error) {
            alert('Erro na chamada AJAX: ' + JSON.stringify(error));
            return null;
        }
    }

     // funcao para calcular as taxas de valor fixo   
    function taxesCalculatorWithoutValue () {
        var emolumentoValue = $('#services_LegisCalc').find(':selected').data('emolumento');
        var frjValue = $('#services_LegisCalc').find(':selected').data('frj');
        var issqnValue = $('#services_LegisCalc').find(':selected').data('issqn');
        var totalValue = $('#services_LegisCalc').find(':selected').data('total');
        var resultValues = {
            emolumento : emolumentoValue,  
            frj : frjValue,    
            issqn : issqnValue,    
            total : totalValue,      
        }
        return resultValues;
    }
    // mascara para o input do telefone
    $('#whatsapp_input').on('input', function(){
        var numero = $(this).val().replace(/\D/g, '');
        numero = numero.substring(0, 11);
        numero = numero.replace(/^(\d{2})(\d)/, '($1) $2');
        numero = numero.replace(/(\d)(\d{4})$/, '$1-$2');
        $(this).val(numero);
    });
    $(document).on('input', '.valueCalc', function(event) {
        let value = $(this).val().replace(/[^\d,]/g, ''); // Remove caracteres não numéricos exceto vírgula
        value = value.replace(/,/g, ''); // Remove a vírgula para manipulação
        if (value.length === 0) {
        value = '0';
        }
        let intValue = parseInt(value);
        if (isNaN(intValue)) {
        intValue = 0;
        }
        // Formata os decimais
        let formattedValue = (intValue / 100).toFixed(2);
        // Substitui ponto por vírgula para o formato brasileiro nos decimais
        formattedValue = formattedValue.replace('.', ',');
        // Insere os pontos a cada três dígitos na parte inteira do número
        let parts = formattedValue.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        // Junta novamente as partes
        formattedValue = parts.join(',');
        $(this).val(formattedValue);
    });
    // funcionalidades de layout
    $('#services_LegisCalc').change(function(event){
        $('.divorceTypeDiv').hide();
        $('.valueInfo_legisCalc').hide();
        resetValues ();
        if ($(this).val() == "Transferência de imóveis") {
            $('.valueInfo_legisCalc').show();
        } else if ($(this).val() == "Divórcio / Separação de bens") {
            $('.divorceTypeDiv').show();
        }
        $('#divResultCalc').hide();
        $('.overlay').hide();
    });
    $('.overlay').click(function(event) {
        $('#divResultCalc').hide();
        $('.overlay').hide();
    }) 
    // adicionar campos de valores
    $(document).on('click', '.addInputValue', function(event) {
        var singleValue =  $(this).parent().find('.valueCalc').val();
        if (singleValue == '') {
            alert('O valor não pode estar vazio!');
            return;
        }
        // Esconde o elemento que foi clicado
        $(this).hide();
        var quantidadeValores = $('.singleValueDiv').length + 1;
        var divToAppend = "<div class='singleValueDiv'>" +
            "<label class='value_legisCalc'>- Valor Item " + quantidadeValores + "</label>" +
            "<p class='placeholderValueCalc'>R$ </p>" +
            "<input type='text' class='valueCalc inputValue'/>" +
            "<i class='removeInputValue fa-solid fa-circle-minus'></i>" +
            "<i class='addInputValue fa-solid fa-circle-plus'></i>" +
        " </div>";
        $('.valueInfo_legisCalc').append(divToAppend);
    });
    // remover campos de valores
    $(document).on('click', '.removeInputValue', function(event) {
        $(this).parent().remove();
        var addInputExistis = $('.addInputValue:visible').length > 0;
        if (!addInputExistis) {
            $('.addInputValue').last().show();
        }
    });
    // reseta valores
    $('.divorceTypeDiv input[type="radio"]').change(function(){
        if(this.checked) {
            var tipo = $(this).data('type');
            
            if(tipo === 'parcial') {
                $('.valueInfo_legisCalc').hide();
                resetValues ();
            } else if(tipo === 'igualitaria') {
                $('.valueInfo_legisCalc').show();
            }
        }
    });
    // função para resetar os valores
    function resetValues () {
        var divs = $('.valueInfo_legisCalc .singleValueDiv');
        divs.each(function(index) {
            if (index ===0) {
                $(this).find('.inputValue').val('');
            } else if (index != 0) {
              $(this).remove();
            }
        });
        $('.addInputValue').show();
    }
});