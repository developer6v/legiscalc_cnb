<?php



require_once __DIR__ . '/../services/garagemCalculator.php';
require_once __DIR__ . '/../services/imoveisCalculator.php';

$type = $_POST['type'] ?? null;
$value = $_POST['value'] ?? null;

echo json_encode(calculatorImoveisManager($type, $value));

function calculatorImoveisManager($type, $value) {
    try {
        if ($type == 'imovel') {
            $resultTaxes = calculatorImoveis($value);
        } elseif ($type == 'garagem') {
            $resultTaxes = calculatorGaragem($value);
        }
    } catch (Exception $e) {
        return $e->getMessage();  
    }

    return $resultTaxes;
}
?>
