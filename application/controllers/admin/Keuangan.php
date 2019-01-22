<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/keuangan_model');
	}

	public function index()
	{
		if(!$this->keuangan_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->keuangan_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_keuangan', array('data_artikel' => $artikel));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_keuangan');
	}

	public function edit($id)
	{
		$data = $this->keuangan_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_keuangan', array('data_artikel' => $data));
	}

	public function delete($id)
	{
		$delete = $this->keuangan_model->delete($id);

		if($delete)
		{
			redirect('keuangan');
		}
	}
	
	public function save()
	{	
		$data = array();
	 	$data['keterangan']	= $this->input->post('keterangan');
	 	$data['tanggal'] 	= $this->input->post('tanggal');
      	$data['nominal']	= $this->input->post('nominal');
      	//$data['jumlah'] 	= ''
      	$data['aturan']		= $this->input->post('aturan');      	

		$insert = $this->keuangan_model->input_data($data);
        	
        if($insert){
  	     	redirect('keuangan');
        }
        else{
        	redirect('keuangan/tambah');
        }
	}
	
	public function update()
	{
		$id = $this->input->post('id_keuangan');
		$data = array();
	 	$data['keterangan']	= $this->input->post('keterangan');
	 	$data['tanggal'] 	= $this->input->post('tanggal');
      	$data['nominal']	= $this->input->post('nominal');
      	//$data['jumlah'] 	= ''
      	$data['aturan']		= $this->input->post('aturan');

		$update = $this->keuangan_model->update($id,$data);
        	
        if($update){
  	     	redirect('keuangan');
        }
        else{
        	redirect('keuangan/ubah/'.$id);
        }
	}
}
