<?php

/**
 * Plugin Name: LegisCalc - CNB
 * Plugin URI: https://github.com/developer6v/legiscalc_cnb
 * Description: Uma ferramenta inovadora e fácil de usar, projetada para descomplicar a vida de quem precisa calcular custos de serviços cartoriais com rapidez e precisão. 
 * Version: 1.0
 * Author: Otavio Developer, Sourei Tech
 * Author URI: https://github.com/developer6v/
*/

if (!defined('ROOT_PATH_DIR') || !defined('ROOT_URL_DIR')) {
    define('ROOT_PATH_DIR', plugin_dir_path(__FILE__));
    define('ROOT_URL_DIR', plugin_dir_url(__FILE__));
}
require_once ROOT_PATH_DIR . 'src/controllers/pluginManager.php';

function legisCalcCNBManager () {
    $pluginManager = new PluginManager();
}

add_action('plugins_loaded', 'legisCalcCNBManager');

?>