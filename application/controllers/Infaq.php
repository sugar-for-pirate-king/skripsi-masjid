<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infaq extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('infaq_model');
	}

	public function index()
	{
		if(!$this->infaq_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->infaq_model->get_all()->result();
		$data2 = $this->infaq_model->sum()->result();

		$this->load->view('admin/pages/hal_infaq', array('data_artikel' => $data,'data_artikel2' => $data2));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_infaq');
	}

	public function edit($id)
	{
		$data = $this->infaq_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_infaq', array('data_artikel' => $data));
	}

	public function delete($id)
	{
		$delete = $this->infaq_model->delete($id);

		if($delete)
		{
			redirect('admin/infaq');
		}
	}

	public function lihat_infaq()
	{
		$data 	= $this->infaq_model->get_all()->result();
		$data2 	= $this->infaq_model->sum()->result();
		
		$this->load->view('user/pages/hal_infaq', array('infaq' => $data, 'infaq2' => $data2));
	}
	
	public function save()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 		= $this->input->post('nama');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');

			$this->infaq_model->input_data($data);
        	redirect('admin/infaq');
        }
        else{
        	redirect('admin/infaq/tambah');
        }
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

		$id = $this->input->post('id_infaq');
		
		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 		= $this->input->post('nama');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');

	      	$this->infaq_model->update($id,$data);
	      	redirect('admin/infaq');
	   	}
        else{
        	redirect('admin/infaq/ubah/'.$id);
        }
	}
}
