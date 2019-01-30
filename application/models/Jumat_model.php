<?php
class Jumat_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_all()
	{	
		$this->db->order_by('id_jumat', 'DESC');
		return $this->db->get('tb_jumat');
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
		$this->db->where('id_jumat',$id);
		return $this->db->get('tb_jumat');
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_jumat', $data);
	}

	public function update($id,$data)
	{	
		$this->db->where('id_jumat', $id);
		return $this->db->update('tb_jumat',$data);
	}

	public function delete($id)
	{	
		$this->db->where('id_jumat', $id);
		return $this->db->delete('tb_jumat');
	}

}