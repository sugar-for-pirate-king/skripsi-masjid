<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('pengurus_model');
	}

	public function index()
	{
		if(!$this->pengurus_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->pengurus_model->get_all()->result();

		$this->load->view('admin/pages/hal_pengurus', array('data_artikel' => $data));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_pengurus');
	}

	public function edit($id)
	{
		$data = $this->pengurus_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_pengurus', array('data_artikel' => $data));
	}

	public function delete($id)
	{
		$delete = $this->pengurus_model->delete($id);

		if($delete)
		{
			redirect('admin/pengurus');
		}
	}

	public function lihat_pengurus()
	{
		$data = $this->pengurus_model->get_all()->result();
		$this->load->view('user/pages/hal_pengurus', array('pengurus' => $data));
	}
	
	public function save()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 					= $this->input->post('nama');
		 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
	      	$data['alamat']					= $this->input->post('alamat');
	      	$data['no_hp'] 					= $this->input->post('no_hp');
	      	$data['email'] 					= $this->input->post('email');
	      	$data['status_kepengurusan'] 	= $this->input->post('status_pengurus');

	      	$this->pengurus_model->input_data($data);
	      	redirect('admin/pengurus');
		}
		else{
			redirect('admin/pengurus/tambah');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');

		$id = $this->input->post('id_pengurus');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 					= $this->input->post('nama');
		 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
	      	$data['alamat']					= $this->input->post('alamat');
	      	$data['no_hp'] 					= $this->input->post('no_hp');
	      	$data['email'] 					= $this->input->post('email');
	      	$data['status_kepengurusan'] 	= $this->input->post('status_pengurus');

	      	$this->pengurus_model->update($id,$data);
	      	redirect('admin/pengurus');
		}
		else{
			redirect('admin/pengurus/ubah/'.$id);
		}
	}

}
