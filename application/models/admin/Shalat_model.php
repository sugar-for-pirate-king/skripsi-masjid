<?php
class Shalat_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_all()
	{
		return $this->db->get('tb_shalat');
	}

	public function is_LoggedIn()
	{
		if(!isset($_SESSION['logged_in']))
		{
			return FALSE;
		}

		return TRUE;
	}

	public function get_by_id($id)
	{
		$this->db->where('id_shalat',$id);
		return $this->db->get('tb_shalat');
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_shalat', $data);
	}

	public function update($id,$data)
	{	
		$this->db->where('id_shalat', $id);
		return $this->db->update('tb_shalat',$data);
	}

	public function delete($id)
	{	
		$this->db->where('id_shalat', $id);
		return $this->db->delete('tb_shalat');
	}

}