<?php
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraImoveis() {
    $output = "
    <div class='calcDivFlex'>
        <div class ='calcDiv'>
            <div class = 'calcDivHeader'>
                <span>Simular custos - Transferência de imóveis</span>
            </div>
            <div class ='formCalcDiv'>
                <form>
                    <div class = 'userInfo_legisCalc'>  
                        <div class = 'userNameDivImovel'>
                            <i class='fa fa-user'></i>
                            <input type='text' id='userName_input' class='inputFormLegisCalc' placeholder='Seu Nome'/>
                        </div>
                        <div class = 'userWhatsappImovel'>
                            <i class='fa-brands fa-whatsapp'></i>
                            <input type='text' id='whatsapp_input' class='inputFormLegisCalc' placeholder='Seu Telefone'/>
                        </div>
                    </div>
                    <div class = 'valuesDiv'>
                        <div class = 'valueImoveis'>
                            <p>Digite os valores dos imóveis:</p>
                            <div class='lineValue'>
                                <label>Valor do imóvel 1</label>
                                <input class='valueImovel valuesInputImoveis' type='text' data-type='imovel' value='0,00'/>
                                <i class='addInputValueImoveis fa-solid fa-circle-plus'></i>
                            </div>    
                        </div>
                        <div class = 'valueImoveis'>
                            <p>Garagens:</p>
                            <div class='lineValue'>
                                <label>Valor da garagem 1</label>
                                <input class='valueGaragem valuesInputImoveis'data-type='garagem' type='text' value='0,00'/>
                                <i class='addInputValueImoveis fa-solid fa-circle-plus'></i>
                            </div>
                        </div>
                    </div>
                    <button data-service='Transferência de Imóveis' class='buttonCalcImovel buttonCalcForEmail'>
                        <span>Calcular</span>
                    </button>
                </form>
            </div>
        </div>";
        $output .= get_footer_cards() ;
        $output .= resultadoCalculadora(); 
        $output .= "
    </div>";
        
    
    return $output;
}
