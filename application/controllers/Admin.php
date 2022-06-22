<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['main'] = 'Dashboard Admin';
        $this->load->view('admin/dashboard');
    }
    public function jenis_layanan()
    {
        $data['main'] = 'Jenis_Layanan Admin';
        $this->load->view('admin/jenis_layanan');
    }
    public function jenis_tes()
    {
        $data['main'] = 'Jenis_Tes Admin';
        $this->load->view('admin/jenis_tes');
    }
}
