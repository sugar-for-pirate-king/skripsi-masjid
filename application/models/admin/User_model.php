<?php
class User_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_user($key, $value)
	{
		$query = $this->db->get_where('admin', array($key=>$value));
		if(!empty($query->row_array()))
		{
			return $query->row_array();
		}

		return FALSE;
	}

	public function is_LoggedIn()
	{
		if(!isset($_SESSION['logged_in']))
		{
			return FALSE;
		}

		return TRUE;
	}
}