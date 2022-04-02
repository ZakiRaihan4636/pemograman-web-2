<?php

require_once 'account_bank.php';


$ab1 = new AccountBank("0101", 5000000, "Zaki");
$ab2 = new AccountBank("0102", 15000000, "Andre");


$ab1->cetak();

echo '<hr>';

$ab2->cetak();
echo '<br>Andree transfer uang ke zaki 1250000 <br>';
$ab2->transfer($ab1, 1250000);
$ab1->cetak();
echo '<hr>';
$ab2->cetak();
