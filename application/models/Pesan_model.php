<?php
class Pesan_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_all()
	{
		return $this->db->get('tb_pesan');
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
		$this->db->where('id_pesan',$id);
		return $this->db->get('tb_pesan');
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_pesan', $data);
	}

	public function delete($id)
	{	
		$this->db->where('id_pesan',$id);
		return $this->db->delete('tb_pesan');
	}
}