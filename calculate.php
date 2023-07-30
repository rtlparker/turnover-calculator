<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monthly_income = (float)$_POST["income"];
    $annual_turnover = $monthly_income * 12;
    $currency_symbol = isset($_POST["currency"]) ? $_POST["currency"] : '£';
    $result_text = "Estimated turnover in the next 12 months:<br>{$currency_symbol}" . number_format($annual_turnover, 2);
    echo $result_text;
}
?>
