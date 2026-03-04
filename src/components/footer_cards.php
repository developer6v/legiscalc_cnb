<?php

function get_footer_cards () {
    $output = "<div class='footer_cards_div'>
        <div class='footer_cards'>
            <p>Aceitamos</p>
            <div class='card_div'>
                <div class='footer_cards_img'>
                    <img src='/wp-content/plugins/legiscalc/public/img/visa.png'/>    
                </div>
                <div class='footer_cards_img'>
                    <img src='/wp-content/plugins/legiscalc/public/img/mastercard.png'/>    
                </div>
            </div>
        </div>
    </div>";
    return $output;
}


?>