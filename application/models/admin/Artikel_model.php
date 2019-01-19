<?php
class Artikel_model extends CI_model {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('tb_artikel');
		$this->db->join('tb_kategori',
					'tb_kategori.id_kategori = tb_artikel.id_kategori');
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
		$this->db->from('tb_artikel');
		$this->db->join('tb_kategori',
					'tb_kategori.id_kategori = tb_artikel.id_kategori');
		$this->db->where('id_artikel',$id);
		return $this->db->get();
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_artikel', $data);
	}

	public function update($data,$kondisi)
	{	
		$this->db->update('tb_artikel',$data,$kondisi);
		return TRUE;
	}

	public function delete($letak)
	{	
		$this->db->where($letak);
		$this->db->delete('tb_artikel');
		return TRUE;
	}

	/*private function _uploadImage()
	{
		$config = [
			'upload_path' 	=> './uploads/',
			'allowed_types'	=> 'jpeg|jpg|gif|png',
			'file_name'		=> $_FILES['gbr_art']['name'],
			'overwrite'		=> TRUE,
			'max_size'		=> 2048,
			'max_width'		=> 4480,
			'max_height'	=> 4480
		];

		$this->load->library('upload', $config);

		
		if ($this->upload->do_upload('gbr_art')) 
		{
			return $this->upload->data();
		}

		return 'default.jpg';
	}*/

	/*private function _deleteImage($id)
	{
		$data = $this->get_by_id($id);
		if($data->gambar != 'default.jpg')
		{
			$filename = explode('.',$data->gambar)[0];
			return array_map('unlink', glob(FCPATH.'uploads/$filename.*'));
		}
	}*/

}