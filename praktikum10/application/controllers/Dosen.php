<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('Dosen_Model', 'dsn');
        $list_dsn = $this->dsn->getAll();
        $data["list_dsn"] = $list_dsn;
        //     $this->dsn1->id = 1;
        //     $this->dsn1->nidn = "01102210";
        //     $this->dsn1->nama = "Raihan Rez";
        //     $this->dsn1->gender = "L";
        //     $this->dsn1->pendidikan = "S1";

        //     $this->load->model('Dosen_Model', 'dsn2');
        //     $this->dsn2->id = 2;
        //     $this->dsn2->nidn = "01232343";
        //     $this->dsn2->nama = "ryuzaki";
        //     $this->dsn2->gender = "L";
        //     $this->dsn2->pendidikan = "S3";

        //     $this->load->model('Dosen_Model', 'dsn3');
        //     $this->dsn3->id = 3;
        //     $this->dsn3->nidn = "12390909";
        //     $this->dsn3->nama = "Kira";
        //     $this->dsn3->gender = "L";
        //     $this->dsn3->pendidikan = "S3";

        //     $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        //     $data['list_dsn'] = $list_dsn;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('dosen/create');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->load->model('Dosen_Model', 'dsn_input');

        $this->dsn_input->nama = $this->input->post('nama');
        $this->dsn_input->nidn = $this->input->post('nidn');
        $this->dsn_input->gender = $this->input->post('gender');
        $this->dsn_input->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn_input->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn_input->pendidikan = $this->input->post('pendidikan');

        $dsn = [$this->dsn_input];
        $data['dsn'] = $dsn;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layouts/footer');
    }
}
