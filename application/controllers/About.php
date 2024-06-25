<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function about()
    {
        $data['title'] = 'About';
        $this->load->view('layout/home/header', $data);
        $this->load->view('about', $data);
        $this->load->view('layout/home/footer');
    }
}
