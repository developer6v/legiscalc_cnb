jQuery(document).ready(function($){
    function sendEmailScript(){
        var name = $('#userName_input').val();
        var valor = $('#total').text();
        var phone = $('#whatsapp_input').val();
        var service = $('.buttonCalcForEmail').data('service');


        try {
            $.ajax({
                url: baseUrl + 'src/controllers/sendEmail.php',
                type: 'POST',
                dataType: 'json', 
                data: {
                    valor: valor,
                    name: name,
                    phone: phone,
                    service: service
                }
            });
    
        } catch (error) {
            console.log('Erro na chamada AJAX: ' + JSON.stringify(error));
            return null;
        }

    };

    // Escute o evento customizado
    $(document).on("calculationCompleted", function() {
        sendEmailScript();
    });
});