<?php

function resultadoCalculadora() {
    $output = "
        <div class='overlay'></div>
        <div id = 'divResultCalc'>      
            <h1>Resultado</h1>   
            <div class='actualResultDiv'>

                <div class='emolumentoDiv'>
                    <p class='titleResult'>Emolumento:</p>
                    <p class='answerResult' id = 'emolumento'></p>
                </div>
                <div class='frjDiv'>
                    <p class='titleResult'>FRJ:</p>
                    <p class='answerResult' id = 'frj'></p>
                </div>
                <div class='issqnDiv'>
                    <p class='titleResult'>ISSQN:</p>
                    <p class='answerResult' id = 'issqn'></p>
                </div>
                <div class='totalDiv'>
                    <p class='titleResultTotal'>TOTAL:</p>
                    <p class='answerResultTotal' id = 'total'></p>
                </div>
            </div>";


            $requestUri = $_SERVER['REQUEST_URI'];
            $requestUri = rtrim($requestUri, '/');
            $parametroUrl = basename($requestUri);

            if ($parametroUrl == 'permuta' || $parametroUrl == 'compra-e-venda-de-imovel') {
                $output .= "<div class='itbi_div'>
                    <div class='itbi_value_div'> 
                        <p class='itbi_value_title'>ITBI:</p>
                        <span id='itbi_value'></span>
                    </div>
                    <p class='description_itbi'>*Previsão de ITBI com base na alíquota do Município de Joinville (de 2%). Demais municípios, verificar a alíquota.</p>
                </div>";
            } 
          
            $output .= "<div class='warningsDiv'>
                <p>* ESTA SIMULAÇÃO É UMA ESTIMATIVA.</p>
                <p>O valor final pode sofrer uma variação por detalhes específicos.</p>
                <p id='divorcioArtigoP'></p>
            </div>
        </div>
    ";
    return $output;
}

