<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
  public function index()
  {

    $this->load->model('dosen_model', 'dsn1');

    $this->dsn1->id = 1;
    $this->dsn1->nidn = '101100';
    $this->dsn1->nama = 'Reza Raihan';
    $this->dsn1->gender = 'L';
    $this->dsn1->pendidikan = 'S2';

    $this->load->model('dosen_model', 'dsn2');

    $this->dsn2->id = 1;
    $this->dsn2->nidn = '101100';
    $this->dsn2->nama = 'Raihan';
    $this->dsn2->gender = 'L';
    $this->dsn2->pendidikan = 'S3';

    $this->load->model('dosen_model', 'dsn3');

    $this->dsn3->id = 1;
    $this->dsn3->nidn = '101100';
    $this->dsn3->nama = 'Sandika Galih';
    $this->dsn3->gender = 'L';
    $this->dsn3->pendidikan = 'S3';

    $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

    $data["list_dsn"] = $list_dsn;


    // echo "Ini adalah website blog";
    $this->load->view("templating/header.php");
    $this->load->view("dosen/index.php", $data);
    $this->load->view("templating/footer.php");
  }
}
