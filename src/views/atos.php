<?php

require_once ROOT_PATH_DIR . "src/services/atosCalculator.php";
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraAtos() {
    $services = atosCalculator();
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestUri = rtrim($requestUri, '/');
    $parametroUrl = basename($requestUri);

    if (isset($services[$parametroUrl])) {
        $service = $services[$parametroUrl];
    } else {
        return "Ato não encontrado!";
    }
    $nameService = $service['Name'];
    $output = "
    <div class='calcDivFlex'>
        <div class ='calcDiv'>
            <div class = 'calcDivHeader'>
                <span>Simular custos - " . $service['Name'] . "</span>
            </div>

            <div class ='formCalcDiv'>
                <form>
                    <div class = 'userInfo_legisCalc'>  
                        <div class = 'userNameDiv'>
                            <i class='fa fa-user'></i>
                            <input type='text' id='userName_input' class='inputFormLegisCalc' placeholder='Seu Nome'/>
                        </div>
                        <div class = 'userWhatsapp'>
                            <i class='fa-brands fa-whatsapp'></i>
                            <input type='text' id='whatsapp_input' class='inputFormLegisCalc' placeholder='Seu Telefone'/>
                        </div>
                    </div>
                    <div id='services_LegisCalc'";
                        $output .= ' data-emolumento="' . $service['Emolumento'] . '"' .
                        ' data-frj="' . $service['FRJ'] . '"' .
                        ' data-issqn="' . $service['ISSQN'] . '"' .
                        ' data-total="' . $service['Total'] . '">';
                    $output .= " </div> 
                    <button data-service='${nameService}' class='buttonCalcAtos buttonCalcForEmail'>
                        <span>Calcular</span>
                    </button>
                </form>
            </div>";
            $output .= get_footer_cards() ;
            $output .= resultadoCalculadora();
            $output .= "
        </div>
    </div>";

    return $output;
}
