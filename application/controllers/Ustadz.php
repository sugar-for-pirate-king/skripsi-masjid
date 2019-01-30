<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('ustadz_model');
	}

	public function index()
	{
		if(!$this->ustadz_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->ustadz_model->get_all()->result();

		$this->load->view('admin/pages/hal_ustadz', array('data_artikel' => $data));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_ustadz');
	}

	public function edit($id)
	{
		$data = $this->ustadz_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_ustadz', array('data_artikel' => $data));
	}

	public function delete($id)
	{
		$delete = $this->ustadz_model->delete($id);

		if($delete)
		{
			redirect('admin/ustadz');
		}
	}

	public function lihat_ustadz()
	{
		$data = $this->ustadz_model->get_all()->result();
		$this->load->view('user/pages/hal_ustadz', array('ustadz' => $data));
	}
	
	public function save()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 					= $this->input->post('nama');
		 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
	      	$data['alamat']					= $this->input->post('alamat');
	      	$data['no_hp'] 					= $this->input->post('no_hp');
	      	$data['email'] 					= $this->input->post('email');
	      	$data['pendidikan'] 			= $this->input->post('pendidikan');

	      	$this->ustadz_model->input_data($data);
	      	redirect('admin/ustadz');
		}
		else{
			redirect('admin/ustadz/tambah');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');

		$id = $this->input->post('id_ustadz');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['nama'] 					= $this->input->post('nama');
		 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
	      	$data['alamat']					= $this->input->post('alamat');
	      	$data['no_hp'] 					= $this->input->post('no_hp');
	      	$data['email'] 					= $this->input->post('email');
	      	$data['pendidikan'] 			= $this->input->post('pendidikan');

	      	$this->ustadz_model->update($id,$data);
	      	redirect('admin/ustadz');
		}
		else{
			redirect('admin/ustadz/ubah/'.$id);
		}
	}

}
