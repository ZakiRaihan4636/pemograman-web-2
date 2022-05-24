<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_Model', 'mhs');
        $this->mhs->id = 1;
        $this->mhs->nim = "010001";
        $this->mhs->nama = "Andre Apriani";
        $this->mhs->gender = "L";
        $this->mhs->ipk = 3.85;

        $this->load->model('Mahasiswa_Model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = "0110221110";
        $this->mhs2->nama = "Muhamad Zaki Raihan";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk = 2.9;

        $list_mhs = [$this->mhs, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->load->model('Mahasiswa_Model', 'mhs_input');
        // $request = $this->input->post([
        //     'nama','nim','gender','tmp_lahir','tgl_lahir','prodi','ipk'
        // ]);
        $this->mhs_input->nama = $this->input->post('nama');
        $this->mhs_input->nim = $this->input->post('nim');
        $this->mhs_input->gender = $this->input->post('gender');
        $this->mhs_input->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs_input->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs_input->prodi = $this->input->post('prodi');
        $this->mhs_input->ipk = $this->input->post('ipk');

        $mhs = [$this->mhs_input];
        $data['mhs'] = $mhs;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layouts/footer');

        // redirect(base_url('mahasiswa'));
    }
}
