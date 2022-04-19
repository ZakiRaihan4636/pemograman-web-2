<?php

require_once 'class_account.php';

$ac1 = new Account("0123", 500000);

$ac1->cetak();
$ac1->deposit(200000);
echo "<br> Deposit : 200000 <br>";
$ac1->cetak();

echo "<hr>";

$ac2 = new Account("045", 40000);
$ac2->cetak();
$ac2->withdrawl(10000);
echo "<br> Widthdraw :  10000 <br>";
$ac2->cetak();
