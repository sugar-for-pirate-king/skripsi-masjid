<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('beranda_model');
	}

	public function index()
	{
		$data 				= array();
		$data['kajian']		= $this->beranda_model->get_kajian()->result();
		$data['pengumuman']	= $this->beranda_model->get_pengumuman()->result();
		$data['infaq']		= $this->beranda_model->get_infaq()->result();
		$data['agenda']		= $this->beranda_model->get_agenda()->result();

		$this->load->view('user/pages/index', $data);
	}
}
