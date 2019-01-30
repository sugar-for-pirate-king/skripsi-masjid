<?php
class Beranda_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_kajian()
	{
		$this->db->where('id_kategori', 2);
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('tb_artikel',5);
	}

	public function get_pengumuman()
	{
		$this->db->where('id_kategori', 4);
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('tb_artikel',5);
	}

	public function get_infaq()
	{
		$this->db->order_by('id_infaq', 'DESC');
		return $this->db->get('tb_infaq',5);
	}

	public function get_agenda()
	{
		$this->db->where('id_kategori', 1);
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('tb_artikel',5);
	}

}