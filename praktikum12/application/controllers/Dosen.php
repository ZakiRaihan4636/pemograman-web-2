<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('Dosen_Model', 'dsn');
        $list_dsn = $this->dsn->getAll();
        $data["list_dsn"] = $list_dsn;


        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }

    public function view()
    {
        $_nidn = $this->input->get('id');
        $this->load->model('Dosen_Model', 'dosen');
        $data['dsn'] = $this->dosen->findById($_nidn);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen/view', $data);
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
        $this->load->model('Dosen_Model', 'dosen');

        // $this->dsn_input->nama = $this->input->post('nama');
        // $this->dsn_input->nidn = $this->input->post('nidn');
        // $this->dsn_input->gender = $this->input->post('gender');
        // $this->dsn_input->tmp_lahir = $this->input->post('tmp_lahir');
        // $this->dsn_input->tgl_lahir = $this->input->post('tgl_lahir');
        // $this->dsn_input->pendidikan = $this->input->post('pendidikan');

        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan = $this->input->post('pendidikan');
        $_prodi = $this->input->post('prodi');
        $_idedit = $this->input->post('idedit');

        $data_dsn[] = $_nidn; // ? 1
        $data_dsn[] = $_nama; // ? 2
        $data_dsn[] = $_gender; // ? 3
        $data_dsn[] = $_tmp_lahir; // ? 4
        $data_dsn[] = $_tgl_lahir; // ? 5
        $data_dsn[] = $_pendidikan; // ? 
        $data_dsn[] = $_prodi; // ? 8

        if (isset($_idedit)) {
            $data_dsn[] = $_idedit;
            $this->dosen->update($data_dsn);
        } else {
            $this->dosen->save($data_dsn);
        }

        redirect(base_url() . '/Dosen/view?id=' . $_nidn, 'refresh');
    }

    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $dsn_edit = $this->dosen->findById($_id);

        $data['dsn_edit'] = $dsn_edit;
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('Dosen_Model', 'dosen');
        $this->dosen->deleteDosen($_id);
        redirect(base_url('Dosen/index'));
    }
}
