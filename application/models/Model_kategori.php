<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{

	public function skincare()
	{
		return $this->db->get_where('product', array('kategori' => 'Skincare'));
	}

	public function treatment()
	{
		return $this->db->get_where('product', array('kategori' => 'Treatment'));
	}
}
