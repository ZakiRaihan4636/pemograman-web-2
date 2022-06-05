<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_Model', 'mhs');
        // $this->mhs->id = 1;
        // $this->mhs->nim = "010001";
        // $this->mhs->nama = "Andre Apriani";
        // $this->mhs->gender = "L";
        // $this->mhs->ipk = 3.85;

        // $this->load->model('Mahasiswa_Model', 'mhs2');
        // $this->mhs2->id = 2;
        // $this->mhs2->nim = "0110221110";
        // $this->mhs2->nama = "Muhamad Zaki Raihan";
        // $this->mhs2->gender = "P";
        // $this->mhs2->ipk = 2.9;

        $list_mhs = $this->mhs->getAll();

        $data['list_mhs'] = $list_mhs;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }

    public function view()
    {
        $_nim = $this->input->get('id');
        $this->load->model('Mahasiswa_Model', 'mahasiswa');
        $data['mhs'] = $this->mahasiswa->findById($_nim);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/view', $data);
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

    // public function update()
    // {
    //     $this->load->view('layouts/header');
    //     $this->load->view('layouts/navbar');
    //     $this->load->view('layouts/sidebar');
    //     $this->load->view('mahasiswa/update');
    //     $this->load->view('layouts/footer');
    // }

    // public function save()
    // {
    //     $this->load->model('Mahasiswa_Model', 'mhs_input');
    //    $mhs->inputnama = $this->input->post('nama');
    //    $mhs->inputnim = $this->input->post('nim');
    //    $mhs->inputgender = $this->input->post('gender');
    //    $mhs->inputtmp_lahir = $this->input->post('tmp_lahir');
    //    $mhs->inputtgl_lahir = $this->input->post('tgl_lahir');
    //    $mhs->inputprodi = $this->input->post('prodi');
    //    $mhs->inputipk = $this->input->post('ipk');

    //     $mhs = [$this->mhs_input];
    //     $data['mhs'] = $mhs;

    //     $this->load->view('layouts/header');
    //     $this->load->view('layouts/navbar');
    //     $this->load->view('layouts/sidebar');
    //     $this->load->view('mahasiswa/view', $data);
    //     $this->load->view('layouts/footer');
    // }

    public function save()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_prodi = $this->input->post('prodi');
        $_idedit = $this->input->post('idedit');

        $data_mhs[] = $_nim; // ? 1
        $data_mhs[] = $_nama; // ? 2
        $data_mhs[] = $_gender; // ? 3
        $data_mhs[] = $_tmp_lahir; // ? 4
        $data_mhs[] = $_tgl_lahir; // ? 5
        $data_mhs[] = $_prodi; // ? 6
        $data_mhs[] = $_ipk; // ? 7


        if (isset($_idedit)) {
            $data_mhs[] = $_idedit;
            $this->mahasiswa->update($data_mhs);
        } else {
            $this->mahasiswa->save($data_mhs);
        }
        redirect(base_url() . '/Mahasiswa/view?id=' . $_nim, 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $mhs_edit = $this->mahasiswa->findById($_id);

        $data['mhs_edit'] = $mhs_edit;
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->mahasiswa->deleteMahasiswa($_id);
        redirect(base_url('Mahasiswa/index'));
    }
}
