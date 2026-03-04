<?php

require_once __DIR__ . '/../services/divorcioIndividual.php';
require_once __DIR__ . '/../services/divorcioItemPorItem.php';
require_once __DIR__ . '/../services/divorcioSemBensCalculator.php';

$planilha = $_POST['planilha'] ?? null;
$type = $_POST['type'] ?? null;
$value = $_POST['value'] ?? null;

echo json_encode(calculatorDivorcio($planilha, $value, $type));


function calculatorDivorcio($planilha, $value, $type) {
    try {
        if ($type == 'Sem bens a partilhar') {
            $resultTaxes = divorcioSemBensCalculator();
        } else {
            if ($planilha == 'individual') {
                $resultTaxes = divorcioIndividual($value);
            } else if ($planilha == 'item_por_item') {
                $resultTaxes = divorcioItemPorItem($value);
            }
        }
    } catch (Exception $e) {
        return $e->getMessage();  
    }

    return $resultTaxes;
}
?>
