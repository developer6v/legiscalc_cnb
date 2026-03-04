<?php

require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraInventario() {
    $output = "
    <div class='calcDivFlex'>
        <div class ='calcDiv'>
            <div class = 'calcDivHeader'>
                <span>Simular custos - Divisão de Bens</span>
            </div>
            <div class ='formCalcDiv'>
                <form>
                    <div class = 'userInfo_legisCalc'>  
                        <div class = 'userNameDivDivorcio'>
                            <i class='fa fa-user'></i>
                            <input type='text' id='userName_input' class='inputFormLegisCalc' placeholder='Seu Nome'/>
                        </div>
                        <div class = 'userWhatsappDivorcio'>
                            <i class='fa-brands fa-whatsapp'></i>
                            <input type='text' id='whatsapp_input' class='inputFormLegisCalc' placeholder='Seu Telefone'/>
                        </div>
                    </div>

                    <div class='servicesInfo_legisCalc'>
                        <label class='service_legisCalc'><i class='fa-solid fa-align-justify'></i> Partilha</label>
                        <select id='services_LegisCalc' class='inputFormLegisCalc' name='services_LegisCalc'>
                            <option value='Sem bens a partilhar'>Sem bens a partilhar</option>
                            <option value='De bens individualizados'>De bens individualizados</option>
                            <option value='Em frações ideais idênticas'>Em frações ideais idênticas</option>
                        </select>
                    </div>
                    <div class = 'valuesDivorcioDiv'>
                        <div class = 'valueDivorcioDiv'>
                            <P>Valor dos bens da herança</P>
                            <div class='lineValueDivorcio'>
                                <label>Valor do bem 1</label>
                                <p>R$</p>
                                <input class='valueDivorcio' type='text' value='0,00'/>
                                <p class='addInputValueInventario'>Outro imóvel</p>
                            </div>    
                        </div>
                    </div>
                    <button data-service='Divisão de Bens' class='buttonCalcInventario buttonCalcForEmail'>
                        <span>Calcular</span>
                    </button>
                </form>
            </div>";
            $output .= get_footer_cards() ;
            $output .= resultadoCalculadora() . "
        </div>
    </div>";
    return $output;
}