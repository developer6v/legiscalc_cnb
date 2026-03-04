jQuery(document).ready(function($){
    $('.buttonCalcHome').click(async function(event){
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

        var valuesResult = await taxesCalculatorHome();

        var emolumentoValue = valuesResult['emolumento'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var frjValue = valuesResult['frj'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var issqnValue = valuesResult['issqn'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var totalValue = valuesResult['total'].toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })  ?? null;
        
        $('#emolumento').text("R$ " + emolumentoValue);
        $('#frj').text("R$ " + frjValue);
        $('#issqn').text("R$ " + issqnValue);
        $('#total').text("R$ " + totalValue);
        $('#divResultCalc').css("display", "block").show();
        $('.overlay').show();
        $(document).trigger("calculationCompleted");        
    });


    // função para calcular as taxas que tem input valor
    async function taxesCalculatorHome() {
        var value = $('.valueCalc').val().replace(/\./g, '').replace(',', '.');   
        try {
            let response = await $.ajax({
                url: baseUrl + 'src/controllers/calculatorImoveis.php',
                type: 'POST',
                dataType: 'json', 
                data: {
                    value: value,
                    type: 'imovel'
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

});
