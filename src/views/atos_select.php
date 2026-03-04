<?php

require_once ROOT_PATH_DIR . "src/services/atosCalculator.php";
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";


function calculadoraAtosSelect() {
    $servicesGeneral = atosCalculator();
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestUri = rtrim($requestUri, '/');
    $parametroUrl = basename($requestUri);

    if ($parametroUrl == 'procuracao') {
        $services = $servicesGeneral['procuracao-collection'];
        $nameService = "Procuração";
    } elseif ($parametroUrl == 'testamento') {
        $services = $servicesGeneral['testamento-collection'];
        $nameService = "Testamento";
    }

    $output = "
    <div class='calcDivFlex'>
        <div class ='calcDiv'>
            <div class = 'calcDivHeader'>
                <span>Simular custos - ". $nameService ."</span>
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
                    <div class='servicesInfo_legisCalc'>
                        <label class='service_legisCalc'><i class='fa-solid fa-align-justify'></i> Serviço</label>
                        <select id='services_LegisCalc' class='inputFormLegisCalc' name='services_LegisCalc'>
                            <option selected disabled>Selecione o Serviço</option>";
                            foreach ($services as $serviceName => $service) {
                                $output .= '<option value="' . $serviceName . '"' .
                                    ' data-emolumento="' . $service['Emolumento'] . '"' .
                                    ' data-frj="' . $service['FRJ'] . '"' .
                                    ' data-issqn="' . $service['ISSQN'] . '"' .
                                    ' data-total="' . $service['Total'] . '">' .
                                    $serviceName .
                                    '</option>';
                            }
                       $output .= " </select> 
                    </div>
                    <button data-service='${nameService}' class='buttonCalcAtosProcuracao buttonCalcForEmail'>
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
