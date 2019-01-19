<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/pengurus_model');
	}

	public function index()
	{
		if(!$this->pengurus_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->pengurus_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_pengurus', array('data_artikel' => $artikel));
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
			redirect('pengurus');
		}
	}
	
	public function save()
	{	
		$data = array();
	 	$data['nama'] 					= $this->input->post('nama');
	 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
      	$data['alamat']					= $this->input->post('alamat');
      	$data['no_hp'] 					= $this->input->post('no_hp');
      	$data['email'] 					= $this->input->post('email');
      	$data['status_kepengurusan'] 	= $this->input->post('status_pengurus');

		$insert = $this->pengurus_model->input_data($data);
        	
        if($insert){
  	     	redirect('pengurus');
        }
        else{
        	redirect('pengurus/tambah');
        }
	}
	
	public function update()
	{
		$id = $this->input->post('id_pengurus');
		$data = array();
	 	$data['nama'] 					= $this->input->post('nama');
	 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
      	$data['alamat']					= $this->input->post('alamat');
      	$data['no_hp'] 					= $this->input->post('no_hp');
      	$data['email'] 					= $this->input->post('email');
      	$data['status_kepengurusan'] 	= $this->input->post('status_pengurus');

		$update = $this->pengurus_model->update($id,$data);
        	
        if($update){
  	     	redirect('pengurus');
        }
        else{
        	redirect('pengurus/ubah/'.$id);
        }
	}
}
