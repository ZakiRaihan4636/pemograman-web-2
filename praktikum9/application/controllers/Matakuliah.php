<?php
defined('BASEPATH') or exit('No direct footer access allowed');

class Matakuliah extends CI_Controller
{
    function index()
    {
        $this->load->model('Matakuliah_model', 'mtkl');
        $this->mtkl->id = 1;
        $this->mtkl->nama_matkul = "Pemrograman Web 2";
        $this->mtkl->kode = "WEB2";
        $this->mtkl->sks = 3;

        $this->load->model('Matakuliah_model', 'mtkl2');
        $this->mtkl2->id = 2;
        $this->mtkl2->nama_matkul = "Basis Data";
        $this->mtkl2->kode = "BD";
        $this->mtkl2->sks = 4;

        $this->load->model('Matakuliah_model', 'mtkl3');
        $this->mtkl3->id = 3;
        $this->mtkl3->nama_matkul = "Statisktika";
        $this->mtkl3->kode = "STK";
        $this->mtkl3->sks = 3;

        $list_mtkl = [$this->mtkl, $this->mtkl2, $this->mtkl3];
        $data['list_mtkl'] = $list_mtkl;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
}
