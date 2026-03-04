<?php

require_once ROOT_PATH_DIR . "src/services/atosCalculator.php";
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraAtos($tipoSelecionado = 'apostilamento-de-haia') {
    $services = atosCalculator();

    if (isset($services[$tipoSelecionado])) {
        $service = $services[$tipoSelecionado];
    } else {
        return "<p style='color:red;'>Ato não encontrado! Verifique o nome do serviço no shortcode.</p>";
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
                    <button type='button' data-service='${nameService}' class='buttonCalcAtos buttonCalcForEmail'>
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
