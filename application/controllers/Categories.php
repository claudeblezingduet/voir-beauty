<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function skincare()
	{
		$data['title'] = 'Skincare Categories';
		$data['skincare'] = $this->model_kategori->skincare()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('skincare', $data);
		$this->load->view('layout/home/footer');
	}

	public function treatment()
	{
		$data['title'] = 'Treatment Categories';
		$data['treatment'] = $this->model_kategori->treatment()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('treatment', $data);
		$this->load->view('layout/home/footer');
	}
}
