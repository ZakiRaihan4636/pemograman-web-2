<?php
defined('BASEPATH') or exit('No direct footer access allowed');

class Prodi extends CI_Controller
{
    public function index()
    {

        $this->load->model('prodi_model', 'prodi');

        $list_prodi = $this->prodi->getAll();
        $data['list_prodi'] = $list_prodi;
        // echo "Ini adalah website blog";

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layouts/footer');
    }
}