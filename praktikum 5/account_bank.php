<?php

require_once 'class_account.php';

class AccountBank extends Account
{
  public $customer;
  static $biaya_admin = 6500;
  function __construct($no, $saldo, $cust)
  {
    parent::__construct($no, $saldo);
    $this->customer = $cust;
  }

  function transfer($ab_tujuan, $uang)
  {
    $ab_tujuan->deposit($uang);
    $this->withdrawl($uang);
    $this->withdrawl(self::$biaya_admin);
  }

  public function cetak()
  {
    parent::cetak();
    echo '<br>Customer : ' . $this->customer;
  }
}
