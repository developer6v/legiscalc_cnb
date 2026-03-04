<?php
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraImoveis() {
    $output = "
    <div class='calcDivFlex'>
        <div class='calcDiv'>
            <div class='calcDivHeader'>
                <span>Simular custos - Transferência de imóveis</span>
            </div>
            
            <div class='formCalcDiv'>
                <form>
                    <div class='form-group'>
                        <i class='fa fa-user'></i>
                        <input type='text' id='userName_input' class='inputFormLegisCalc' placeholder='Seu Nome'/>
                    </div>
                    
                    <div class='form-group'>
                        <i class='fa-brands fa-whatsapp'></i>
                        <input type='text' id='whatsapp_input' class='inputFormLegisCalc' placeholder='Seu Telefone'/>
                    </div>

                    <div class='grid-imoveis-garagens'>
                        <div class='values-column' id='coluna-imoveis'>
                            <label class='column-title'><i class='fa-solid fa-house'></i> Valores dos imóveis</label>
                            <div class='form-group value-item-row'>
                                <span class='currency-symbol'>R$</span>
                                <input class='valueImovel valuesInputImoveis' type='text' data-type='imovel' value='0,00'/>
                                <i class='addInputValueImoveis fa-solid fa-circle-plus action-icon'></i>
                            </div>    
                        </div>

                        <div class='values-column' id='coluna-garagens'>
                            <label class='column-title'><i class='fa-solid fa-car'></i> Valores das garagens</label>
                            <div class='form-group value-item-row'>
                                <span class='currency-symbol'>R$</span>
                                <input class='valueGaragem valuesInputImoveis' data-type='garagem' type='text' value='0,00'/>
                                <i class='addInputValueImoveis fa-solid fa-circle-plus action-icon'></i>
                            </div>
                        </div>
                    </div>

                    <button type='button' data-service='Transferência de Imóveis' class='btn-primary-legis buttonCalcImovel buttonCalcForEmail'>
                        <i class='fa-solid fa-calculator'></i> Calcular Custos
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
?>