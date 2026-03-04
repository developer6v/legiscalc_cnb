<?php
require_once ROOT_PATH_DIR . "src/controllers/pagesManager.php";

class PluginManager {
    public function __construct() {
        add_shortcode('homeLegiscalc', array($this, 'homePage'));
        add_shortcode('transferenciaLegiscalc', array($this, 'transferenciaImoveisPage'));
        add_shortcode('atosTabeliaoLegiscalc', array($this, 'atosTabeliaoPage'));
        add_shortcode('divorcioLegiscalc', array($this, 'divorcioPage'));
        add_shortcode('inventarioLegiscalc', array($this, 'inventarioPage'));
        add_shortcode('atosSelectLegiscalc', array($this, 'atosSelectPage'));
        add_action('wp_enqueue_scripts', array($this, 'setScripts'));
    }

    public function homePage() {
        ob_start();
        $page = 'home';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        add_action('wp_enqueue_scripts', array($this, 'setScripts'));
        return ob_get_clean();
    }

    public function atosTabeliaoPage() {
        ob_start();
        $page = 'atos';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        return ob_get_clean();
    }

    public function atosSelectPage() {
        ob_start();
        $page = 'atosSelect';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        return ob_get_clean();
    }

    public function transferenciaImoveisPage() {
        ob_start();
        $page = 'imoveis';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        return ob_get_clean();
    }
    
    public function divorcioPage() {
        ob_start();
        $page = 'divorcio';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        return ob_get_clean();
    }

    public function inventarioPage() {
        ob_start();
        $page = 'inventario';
        $legisCalc = new pagesManager();
        echo $legisCalc->outputPage($page);
        return ob_get_clean();
    }
    public function setScripts() {
        // base da url
        echo '<script>var baseUrl = "' . ROOT_URL_DIR . '";</script>';
        
        // email
        wp_enqueue_script('sendEmail', ROOT_URL_DIR . 'public/js/sendEmail.js', array('jquery'), time(), 'all');

        // font awesome
        wp_enqueue_style('font-awesome-atualizado', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

        // app
        wp_enqueue_style('app', ROOT_URL_DIR . 'public/css/app.css', array(), time(), 'all');
        wp_enqueue_script('app', ROOT_URL_DIR . 'public/js/app.js', array('jquery'), time(), 'all');
    
        // home
        wp_enqueue_style('home', ROOT_URL_DIR . 'public/css/home.css', array(), time(), 'all');
        wp_enqueue_script('home', ROOT_URL_DIR . 'public/js/home.js', array('jquery'), time(), 'all');
   
        //divorcio
        wp_enqueue_style('divorcio', ROOT_URL_DIR . 'public/css/divorcio.css', array(), time(), 'all');
        wp_enqueue_script('divorcio', ROOT_URL_DIR . 'public/js/divorcio.js', array('jquery'), time(), 'all');
  
        //inventario
        wp_enqueue_style('inventario', ROOT_URL_DIR . 'public/css/inventario.css', array(), time(), 'all');
        wp_enqueue_script('inventario', ROOT_URL_DIR . 'public/js/inventario.js', array('jquery'), time(), 'all');

        // atos
        wp_enqueue_style('atos', ROOT_URL_DIR . 'public/css/atos.css', array(), time(), 'all');
        wp_enqueue_script('atos', ROOT_URL_DIR . 'public/js/atos.js', array('jquery'), time(), 'all');

        // procuracao
        wp_enqueue_style('procuracao', ROOT_URL_DIR . 'public/css/procuracao.css', array(), time(), 'all');
        wp_enqueue_script('procuracao', ROOT_URL_DIR . 'public/js/procuracao.js', array('jquery'), time(), 'all');

        // footer cards
        wp_enqueue_style('footer_cards', ROOT_URL_DIR . 'public/css/footer_cards.css', array(), time(), 'all');
    
        // imoveis
        wp_enqueue_style('imoveis', ROOT_URL_DIR . 'public/css/imoveis.css', array(), time(), 'all');
        wp_enqueue_script('imoveis', ROOT_URL_DIR . 'public/js/imoveis.js', array('jquery'), time(), 'all');
    }
}