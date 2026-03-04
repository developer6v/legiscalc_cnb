jQuery(document).ready(function($){
    $(document).on('click', '.addInputValueImoveis', function(event){
        var singleValue =  $(this).parent().find('.valueImovel').val();
        if (singleValue == '') {
            alert('O valor não pode estar vazio!');
            return;
        }
        // Esconde o elemento que foi clicado
       $(this).hide();
        var quantidadeValores = $('.valueImovel').length + 1;
        var divToAppend = "<div class='valueImoveis'>" +
            "<div class='lineValue'>" +
                "<label>Valor do imóvel " + quantidadeValores + "</label>" +
                "<input class='valueImovel valuesInputImoveis' type='text' value = '0,00' data-type='imovel'> " +
                "<i class='addInputValueImoveis fa-solid fa-circle-plus'></i>" +
            "</div>" +
        "</div>" + 
        "<div class='valueImoveis'>" +
            "<div class='lineValue'>" +
                "<label>Valor da garagem " + quantidadeValores + "</label>" +
                "<input class='valueGaragem valuesInputImoveis' type='text' value = '0,00' data-type='garagem'>" +
                "<i class='addInputValueImoveis fa-solid fa-circle-plus'></i>" +
            "</div>" +
        "</div>";
        $('.valuesDiv').append(divToAppend);
    });



    // mascara inputs values
    $(document).on('input', '.valuesInputImoveis', function(event) {
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



    $('.buttonCalcImovel').click(async function(event) {
        event.preventDefault(); 
    

        if ($('#userName_input').val() == '') {
            alert('O campo "Nome" deve ser preenchido!');
            return;
        }
        if ($('#whatsapp_input').val() == '') {
            alert('O campo "WhatsApp" deve ser preenchido!');
            return;
        } 
        let emolumento = 0;
        let frj = 0;
        let issqn = 0;
        let total = 0;
        var valueSoma = 0;
    
        const requests = $('.valuesInputImoveis').map(function() {
            const inputValue = parseFloat($(this).val().replace(/\./g, '').replace(',', '.'));
            const type = $(this).data('type');
            valueSoma += inputValue;
            if (inputValue != 0) {
                return $.ajax({
                    url: baseUrl + 'src/controllers/calculatorImoveis.php',
                    type: 'POST',
                    dataType: 'json', 
                    data: {
                        value: inputValue,
                        type: type
                    }
                }).then(response => {
                    emolumento += response.emolumento;
                    frj += response.frj;
                    issqn += response.issqn;
                    total += response.total;
                });
            }
        }).get();
    
        // mostrar os valores na tela
        Promise.all(requests).then(() => {
            // calculo itbi
            var itbi_value = (valueSoma * 2) / 100;
            $('#itbi_value').text("R$ " + itbi_value.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) );


            $('#emolumento').text("R$ " + emolumento.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) );
            $('#frj').text("R$ " + frj.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) );
            $('#issqn').text("R$ " + issqn.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) );
            $('#total').text("R$ " + total.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) );
            $('#divResultCalc').css("display", "block").show();
            $('.overlay').show();
            $(document).trigger("calculationCompleted");        

        });
    });
});