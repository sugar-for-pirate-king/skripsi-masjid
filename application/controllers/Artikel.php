<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('artikel_model');
	}

	public function index()
	{
		if(!$this->artikel_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->artikel_model->get_all()->result();

		$this->load->view('admin/pages/hal_artikel', array('data_artikel' => $data));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_artikel');
	}

	public function edit($id)
	{
		$data = $this->artikel_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_artikel', array('data_artikel' => $data));
	}

	public function read($id)
	{
		$data = $this->artikel_model->get_by_id($id)->row();
		$this->load->view('admin/pages/read_artikel', array('data_artikel' => $data));
	}

	public function delete($id,$gambar)
	{
		$path = './uploads/';
    	@unlink($path.$gambar);

		$letak = array('id_artikel' => $id );
		$this->artikel_model->delete($letak);
		return redirect('admin/artikel');
	}

	public function lihat_agenda()
	{
		$data = $this->artikel_model->get_artikel('1')->result();
		$this->load->view('user/pages/hal_agenda', array('agenda' => $data));
	}

	public function lihat_agenda_detail($slug)
	{
		$data = $this->artikel_model->get_detail_artikel($slug)->row();
		$this->load->view('user/pages/hal_agenda_detail', array('detail_agenda' => $data));
	}
	
	public function lihat_kajian()
	{
		$data = $this->artikel_model->get_artikel('2')->result();
		$this->load->view('user/pages/hal_kajian', array('kajian' => $data));
	}

	public function lihat_kajian_detail($slug)
	{
		$data = $this->artikel_model->get_detail_artikel($slug)->row();
		$this->load->view('user/pages/hal_kajian_detail', array('detail_kajian' => $data));
	}

	public function lihat_layanan()
	{
		$data = $this->artikel_model->get_artikel('3')->result();
		$this->load->view('user/pages/hal_layanan', array('layanan' => $data));
	}

	public function lihat_layanan_detail($slug)
	{
		$data = $this->artikel_model->get_detail_artikel($slug)->row();
		$this->load->view('user/pages/hal_layanan_detail', array('detail_layanan' => $data));
	}

	public function lihat_pengumuman()
	{
		$data = $this->artikel_model->get_artikel('4')->result();
		$this->load->view('user/pages/hal_pengumuman', array('pengumuman' => $data));
	}

	public function lihat_pengumuman_detail($slug)
	{
		$data = $this->artikel_model->get_detail_artikel($slug)->row();
		$this->load->view('user/pages/hal_pengumuman_detail', array('detail_pengumuman' => $data));
	}

	public function save()
	{	
	 	$judul 		  = $this->input->post('jdl_art');
	 	$slug	 	  = url_title($this->input->post('jdl_art'), 'dash', TRUE);
      	$isi 		  = $this->input->post('isi_art');
      	$tanggal 	  = date('d-m-Y h:i');
      	$id_kategori  = $this->input->post('idKat');

      	// ambil gambar
      	$config['upload_path'] 	  = './uploads/';
      	$config['allowed_types']  = 'jpg|png|jpeg|gif';
      	$config['max_size'] 	  = '2048';  //2MB max
      	$config['max_width']  	  = '4480'; // pixel
      	$config['max_height'] 	  = '4480'; // pixel
      	$config['overwrite']	  = 'TRUE';
      	$config['file_name'] 	  = $_FILES['gbr_art']['name'];

      	$this->upload->initialize($config);

	    if (!empty($_FILES['gbr_art']['name'])) {
	        if ( $this->upload->do_upload('gbr_art') ) {
	            $gambar = $this->upload->data();
	            $data = array(
	                          'judul'      	=> $judul,
	                          'slug'		=> $slug,
	                          'isi'       	=> $isi,
                              'gambar'      => $gambar['file_name'],
                              'tanggal'     => $tanggal,
	                          'id_kategori'	=> $id_kategori,
	                        );
			$this->artikel_model->input_data($data);
        	redirect('admin/artikel');
	        }else { ?>
            <script language="javascript">
                    alert('Gambar harus berformat .jpg .png .gif');
                    document.location="<?php echo site_url('admin/artikel/tambah'); ?>";
         	</script>
	    	<?php 
	  		}
	    }else { ?>
	 	    <script language="javascript">
                    alert('Anda belum memilih gambar');
                    document.location="<?php echo site_url('admin/artikel/tambah'); ?>";
          	</script>
		 	<?php
	 	}
	}
	
	public function update()
	{
		$id 		 = $this->input->post('blog_id');
		$judul 		 = $this->input->post('jdl_art');
		$slug		 = url_title($this->input->post('jdl_art'), 'dash', TRUE);
		$isi 		 = $this->input->post('isi_art');
		$tanggal 	 = date('d-m-Y h:i');
		$id_kategori = $this->input->post('idKat');

		$data = array(
		      'id_artikel'	=> $id,
		      'judul'      	=> $judul,
		      'slug'		=> $slug,
		      'isi'       	=> $isi,
		      'tanggal'     => $tanggal,
		      'id_kategori'	=> $id_kategori, 
		      );
		$path = './uploads/';

		$kondisi = array('id_artikel' => $id );

		// ambil gambar
		$config['upload_path'] 	 = './uploads/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] 	 = '2048';  //2MB max
		$config['max_width'] 	 = '4480'; // pixel
		$config['max_height'] 	 = '4480'; // pixel
		$config['overwrite']	 = 'TRUE';
		$config['file_name'] 	 = $_FILES['gbr_art']['name'];

		$this->upload->initialize($config);

	    if (!empty($_FILES['gbr_art']['name'])) {
	        if ( $this->upload->do_upload('gbr_art') ) {
	            $gambar = $this->upload->data();
	          	$data['gambar'] = $gambar['file_name'];

            // hapus foto pada direktori
            @unlink($path.$this->input->post('old_image'));

			$this->artikel_model->update($data,$kondisi);
            
            redirect('admin/artikel');
	        }else { ?>
            <script language="javascript">
                    alert('Gambar harus berformat .jpg .png .gif');
                    document.location="<?php echo site_url('admin/artikel/ubah/'.$id); ?>";
         	</script>
	 		<?php 
	        }
	    }else {
	    	$data['gambar'] = $this->input->post('old_image');
	    	$this->artikel_model->update($data,$kondisi);
            
            redirect('admin/artikel');
	    }
 	}
	
}