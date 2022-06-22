<?php

class Peserta extends CI_Controller
{
    public function rumah()
    {
        $data['main'] = 'Rumah Peserta';
        $this->load->view('peserta/rumah');
    }
}
