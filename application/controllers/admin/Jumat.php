<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumat extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/jumat_model');
	}

	public function index()
	{
		if(!$this->jumat_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->jumat_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_jumat', array('data_artikel' => $artikel));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_jumat');
	}

	public function edit($id)
	{
		$data = $this->jumat_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_jumat', array('data_artikel' => $data));
	}
	
	public function delete($id)
	{
		$delete = $this->jumat_model->delete($id);

		if($delete)
		{
			redirect('jumat');
		}
	}
	
	public function save()
	{	
		$data = array();
	 	$data['tanggal']	 = $this->input->post('tanggal');
	 	$data['jam']		 = $this->input->post('jam');
	 	$data['muadzin'] 	 = $this->input->post('muadzin');
	 	$data['imam']		 = $this->input->post('imam');
	 	$data['khatib']		 = $this->input->post('khatib');

		$insert = $this->jumat_model->input_data($data);
        	
        if($insert){
  	     	redirect('jumat');
        }
        else{
        	redirect('jumat/tambah');
        }
	}
	
	public function update()
	{	
		$id   = $this->input->post('id_jumat');
		$data = array();
	 	$data['tanggal']	 = $this->input->post('tanggal');
	 	$data['jam']		 = $this->input->post('jam');
	 	$data['muadzin'] 	 = $this->input->post('muadzin');
	 	$data['imam']		 = $this->input->post('imam');
	 	$data['khatib']		 = $this->input->post('khatib');

		$update = $this->jumat_model->update($id,$data);
        	
        if($update){
  	     	redirect('jumat');
        }
        else{
        	redirect('jumat/ubah/'.$id);
        }
	}

}