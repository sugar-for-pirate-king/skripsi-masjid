<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infaq extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/infaq_model');
	}

	public function index()
	{
		if(!$this->infaq_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->infaq_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_infaq', array('data_artikel' => $artikel));
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
			redirect('infaq');
		}
	}
	
	public function save()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|decimal');

		$nominal = $this->input->post('nominal');
		$jumlah_awal = 0;
		$jumlah = $jumlah_awal + $nominal;
		

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 		= $this->input->post('nama');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');
	      	$data['jumlah']		= $jumlah;

			$this->infaq_model->input_data($data);
        	redirect('infaq');
        }
        else{
        	redirect('infaq/tambah');
        }
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required');

		$id = $this->input->post('id_infaq');
		
		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 		= $this->input->post('nama');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');
	      	//$data['jumlah']		= ;

	      	$this->infaq_model->update($id,$data);
	      	redirect('infaq');
	   	}
        else{
        	redirect('infaq/ubah/'.$id);
        }
	}
}
