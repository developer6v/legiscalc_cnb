<?php
function resultadoCalculadora() {
    $output = "
        <div class='overlay'></div>
        <div id='divResultCalc' class='result-modal'>
            
            <div class='result-header'>
                <h2><i class='fa-solid fa-file-invoice-dollar'></i> Resumo da Simulação</h2>
                <button  class='close-modal' id='closeModalBtn'><i class='fa-solid fa-xmark'></i></button>
            </div>   
            
            <div class='actualResultDiv'>
                <div class='tax-row'>
                    <span class='titleResult'>Emolumento</span>
                    <span class='answerResult' id='emolumento'>R$ 0,00</span>
                </div>
                <div class='tax-row'>
                    <span class='titleResult'>FRJ</span>
                    <span class='answerResult' id='frj'>R$ 0,00</span>
                </div>
                <div class='tax-row'>
                    <span class='titleResult'>ISSQN</span>
                    <span class='answerResult' id='issqn'>R$ 0,00</span>
                </div>
                
                <div class='tax-row total-row'>
                    <span class='titleResultTotal'>TOTAL ESTIMADO</span>
                    <span class='answerResultTotal' id='total'>R$ 0,00</span>
                </div>
            </div>";

            $requestUri = $_SERVER['REQUEST_URI'];
            $requestUri = rtrim($requestUri, '/');
            $parametroUrl = basename($requestUri);

            if ($parametroUrl == 'permuta' || $parametroUrl == 'compra-e-venda-de-imovel') {
                $output .= "
                <div class='itbi_div'>
                    <div class='itbi-header'>
                        <i class='fa-solid fa-building-columns'></i> Previsão de ITBI
                    </div>
                    <div class='tax-row itbi-row'>
                        <span class='titleResult'>Valor do Imposto</span>
                        <span class='answerResult' id='itbi_value'>R$ 0,00</span>
                    </div>
                    <p class='description_itbi'>*Cálculo com base na alíquota de Joinville (2%). Verifique a regra do seu município.</p>
                </div>";
            } 
          
            $output .= "
            <div class='warningsDiv'>
                <p><i class='fa-solid fa-circle-info'></i> <strong>Atenção:</strong> Esta simulação é apenas uma estimativa.</p>
                <p>O valor final pode sofrer variações devido a detalhes específicos no momento da lavratura do ato.</p>
                <p id='divorcioArtigoP'></p>
            </div>
        </div>
    ";
    return $output;
}
?>