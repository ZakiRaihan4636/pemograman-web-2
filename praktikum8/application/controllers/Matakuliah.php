<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
  public function index()
  {

    $this->load->model('matakuliah_model', 'mtkl1');

    $this->mtkl1->id = 1;
    $this->mtkl1->nama = 'Pemrograman Web';
    $this->mtkl1->kode = 'kd001';
    $this->mtkl1->sks = 3;

    $this->load->model('matakuliah_model', 'mtkl2');

    $this->mtkl2->id = 2;
    $this->mtkl2->nama = 'Basis Data';
    $this->mtkl2->kode = 'kd002';
    $this->mtkl2->sks = 4;


    $this->load->model('matakuliah_model', 'mtkl3');

    $this->mtkl3->id = 3;
    $this->mtkl3->nama = 'UI UX';
    $this->mtkl3->kode = 'kd003';
    $this->mtkl3->sks = 3;

    $list_mtkl = [$this->mtkl1, $this->mtkl2, $this->mtkl3];

    $data["list_mtkl"] = $list_mtkl;


    // echo "Ini adalah website blog";
    $this->load->view("templating/header.php");
    $this->load->view("matakuliah/index.php", $data);
    $this->load->view("templating/footer.php");
  }
}
