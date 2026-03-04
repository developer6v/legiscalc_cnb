<?php
require_once ROOT_PATH_DIR . "src/views/home.php";
require_once ROOT_PATH_DIR . "src/views/imoveis.php";
require_once ROOT_PATH_DIR . "src/views/atos.php";
require_once ROOT_PATH_DIR . "src/views/divorcio.php";
require_once ROOT_PATH_DIR . "src/views/inventario.php";
require_once ROOT_PATH_DIR . "src/views/atos_select.php";

class pagesManager  {
    function outputPage ($page) {
        switch ($page) {
            case "home":
                return calculadoraHome();
            case "imoveis":
                return calculadoraImoveis();
            case "atos":
                return calculadoraAtos();
            case "divorcio":
                return calculadoraDivorcio();
            case "inventario":
                return calculadoraInventario();
            case "atosSelect":
                return calculadoraAtosSelect();
            default:
                return calculadoraHome();
        }
    }
}

?>