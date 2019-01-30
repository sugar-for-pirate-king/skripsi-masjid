<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('pesan_model');
	}

	public function index()
	{
		if(!$this->pesan_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->pesan_model->get_all()->result();

		$this->load->view('admin/pages/hal_pesan', array('data_artikel' => $data));
	}

	public function lihat_kontak()
	{
		$this->load->view('user/pages/hal_kontak');
	}
	
	public function save()
	{	
		$data = array();
	 	$data['nama'] 		= $this->input->post('nama');
	 	$data['tanggal']	= date('d-m-Y h:i');
      	$data['email']		= $this->input->post('email');
      	$data['website'] 	= $this->input->post('website');
      	$data['pesan'] 		= $this->input->post('pesan');

		$insert = $this->pesan_model->input_data($data);
        	
        if($insert){
  	     	redirect('beranda');
        }
        else{
        	redirect('kontak');
        }
	}

	public function delete($id)
	{
		$delete = $this->pesan_model->delete($id);

		if($delete)
		{
			redirect('admin/pesan');
		}
	}
	
}
