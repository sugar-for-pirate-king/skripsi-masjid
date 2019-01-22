<?php 
class Keuangan_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_all()
	{
		return $this->db->get('tb_keuangan');
	}
	public function sum()
	{
	$this->db->select_sum('nominal');
	$this->db->from('tb_keuangan');
	return $this->db->get();


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
		$this->db->where('id_keuangan',$id);
		return $this->db->get('tb_keuangan');
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_keuangan', $data);
	}

	public function update($id,$data)
	{	
		$this->db->where('id_keuangan',$id);
		return $this->db->update('tb_keuangan',$data);
	}

	public function delete($id)
	{	
		$this->db->where('id_keuangan',$id);
		return $this->db->delete('tb_keuangan');
	}
}