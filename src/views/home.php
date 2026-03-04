<?php
require_once ROOT_PATH_DIR . "src/components/resultadoCalculadora.php";
require_once ROOT_PATH_DIR . "src/components/footer_cards.php";

function calculadoraHome() {
    $output = "<div class='calcDivFlex'>
        <div class ='calcDiv'>
            <div class = 'calcDivHeader calcDivHeaderHome'>
                <span>Orçamento rápido</span>
                <p>Transferência de imóveis</p>
            </div>

            <div class ='formCalcDiv'>
                <form>
                    <div class = 'userInfo_legisCalc'>  
                        <div class = 'userNameDivHome'>
                            <i class='fa fa-user icon-home'></i>
                            <input type='text' id='userName_input' class='inputFormLegisCalc' placeholder='Seu Nome'/>
                        </div>
                        <div class = 'userWhatsappHome'>
                            <i class='fa-brands fa-whatsapp icon-home'></i>
                            <input type='text' id='whatsapp_input' class='inputFormLegisCalc' placeholder='Seu Telefone'/>
                        </div>
                    </div>
                    <div class = 'valueHome'>
                        <i class='fa-solid fa-brazilian-real-sign icon-home'></i>
                        <input type='text' placeholder='Valor do imóvel' class='valueCalc inputValue'/>
                    </div>
                    <div class='container-footer-panhacao'>
                        <button data-service='Transferência de Imóveis (Home)' class='buttonCalcHome buttonCalcForEmail'>
                            <span>Calcular</span>
                        </button>
                        <div class='complete-simulation'>
                            <a href='compra-e-venda-de-imovel/'>Orçamento Completo</a>
                        </div>
                    </div> 
                
                </form>
            </div>";
            $output .= get_footer_cards() ;
            $output .= resultadoCalculadora() . "
        </div>
    </div>";
    return $output;
}