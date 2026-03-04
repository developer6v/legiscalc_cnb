jQuery(document).ready(function($){
    // gerencia o calculo das taxas
    $('.buttonCalcAtos').click(async function(event){
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

        var emolumentoValue = $('#services_LegisCalc').data('emolumento').toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var frjValue = $('#services_LegisCalc').data('frj').toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var issqnValue = $('#services_LegisCalc').data('issqn').toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;
        var totalValue = $('#services_LegisCalc').data('total').toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) ;

        
        $('#emolumento').text("R$ " + emolumentoValue);
        $('#frj').text("R$ " + frjValue);
        $('#issqn').text("R$ " + issqnValue);
        $('#total').text("R$ " + totalValue);
        $('#divResultCalc').css("display", "block").show();
        $('.overlay').show();
        $(document).trigger("calculationCompleted");        

    });
});