<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shalat extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin/shalat_model');
	}

	public function index()
	{
		if(!$this->shalat_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->shalat_model->get_all();
		$artikel = $data->result();

		$this->load->view('admin/pages/hal_shalat', array('data_artikel' => $artikel));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_shalat');
	}

	public function edit($id)
	{
		$data = $this->shalat_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_shalat', array('data_artikel' => $data));
	}
	
	public function delete($id)
	{
		$delete = $this->shalat_model->delete($id);

		if($delete)
		{
			redirect('shalat');
		}
	}
	
	public function save()
	{	
		$data = array();
		$data['bulan_tahun'] = $this->input->post('bulan_tahun');
	 	$data['tanggal']	 = $this->input->post('tanggal');
	 	$data['subuh']		 = $this->input->post('subuh');
	 	$data['dzuhur']		 = $this->input->post('dzuhur');
	 	$data['ashar']		 = $this->input->post('ashar');
	 	$data['magrib']		 = $this->input->post('magrib');
	 	$data['isya']		 = $this->input->post('isya');

		$insert = $this->shalat_model->input_data($data);
        	
        if($insert){
  	     	redirect('shalat');
        }
        else{
        	redirect('shalat/tambah');
        }
	}
	
	public function update()
	{	
		$id   = $this->input->post('id_shalat');
		$data = array();
		$data['bulan_tahun'] = $this->input->post('bulan_tahun');
	 	$data['tanggal']	 = $this->input->post('tanggal');
	 	$data['subuh']		 = $this->input->post('subuh');
	 	$data['dzuhur']		 = $this->input->post('dzuhur');
	 	$data['ashar']		 = $this->input->post('ashar');
	 	$data['magrib']		 = $this->input->post('magrib');
	 	$data['isya']		 = $this->input->post('isya');

		$update = $this->shalat_model->update($id,$data);
        	
        if($update){
  	     	redirect('shalat');
        }
        else{
        	redirect('shalat/ubah/'.$id);
        }
	}

}