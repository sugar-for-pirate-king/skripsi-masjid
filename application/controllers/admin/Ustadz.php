<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/ustadz_model');
	}

	public function index()
	{
		if(!$this->ustadz_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->ustadz_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_ustadz', array('data_artikel' => $artikel));
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
			redirect('ustadz');
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
      	$data['pendidikan']			 	= $this->input->post('pendidikan');

		$insert = $this->ustadz_model->input_data($data);
        	
        if($insert){
  	     	redirect('ustadz');
        }
        else{
        	redirect('ustadz/tambah');
        }
	}
	
	public function update()
	{
		$id = $this->input->post('id_ustadz');
		$data = array();
	 	$data['nama'] 					= $this->input->post('nama');
	 	$data['tempat_tanggal_lahir'] 	= $this->input->post('ttl');
      	$data['alamat']					= $this->input->post('alamat');
      	$data['no_hp'] 					= $this->input->post('no_hp');
      	$data['email'] 					= $this->input->post('email');
      	$data['pendidikan'] 			= $this->input->post('pendidikan');

		$update = $this->ustadz_model->update($id,$data);
        	
        if($update){
  	     	redirect('ustadz');
        }
        else{
        	redirect('ustadz/ubah/'.$id);
        }
	}
}
