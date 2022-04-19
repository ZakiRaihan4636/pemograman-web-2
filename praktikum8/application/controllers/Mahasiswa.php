<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

  // Fungsi : menampikan seluruh data
  public function index()
  {

    // Load mahasiswa model
    $this->load->model('mahasiswa_model', 'mhs1');

    // Pake class model + ini data
    $this->mhs1->id = 1;
    $this->mhs1->nim = '010001';
    $this->mhs1->nama = 'Faiz Fikri';
    $this->mhs1->gender = 'L';
    $this->mhs1->ipk = 3.85;

    // Load mahasiswa model
    $this->load->model('mahasiswa_model', 'mhs2');

    // Pake class model + ini data
    $this->mhs2->id = 2;
    $this->mhs2->nim = '020001';
    $this->mhs2->nama = 'Pandan Wangi';
    $this->mhs2->gender = 'P';
    $this->mhs2->ipk = 3.35;

    // Load mahasiswa model
    $this->load->model('mahasiswa_model', 'mhs3');

    // Pake class model + ini data
    $this->mhs3->id = 3;
    $this->mhs3->nim = '030001';
    $this->mhs3->nama = 'Kegy';
    $this->mhs3->gender = 'L';
    $this->mhs3->ipk = 3.9;

    // Menyimoan objek dalam array
    $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];

    // siapkan data untuk dikriim ke view
    $data["list_mhs"] = $list_mhs;

    // untuk mengirim data + menampikan ke view
    $this->load->view('templating/header.php');
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templating/footer.php');
  }
}
