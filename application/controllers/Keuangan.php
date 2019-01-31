<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('keuangan_model');
	}

	public function index()
	{
		if(!$this->keuangan_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->keuangan_model->get_all()->result();
		$data2 = $this->keuangan_model->sum()->result();

		$this->load->view('admin/pages/hal_keuangan', array('data_artikel' => $data,'data_artikel2' => $data2));
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
		$this->keuangan_model->delete($id);
	?>
		<script language="javascript">
       		    alert('Data telah di hapus.');
                document.location="<?php echo site_url('admin/keuangan'); ?>";
        </script>
	<?php
	}
	
	public function lihat_keuangan()
	{
		$data 	= $this->keuangan_model->get_all()->result();
		$data2 	= $this->keuangan_model->sum()->result();
		
		$this->load->view('user/pages/hal_keuangan', array('keuangan' => $data, 'keuangan2' => $data2));
	}

	public function save()
	{	
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

		if($this->form_validation->run() == TRUE) 
		{
			$data = array();
		 	$data['keterangan']	= $this->input->post('keterangan');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');	
		
	      	$this->keuangan_model->input_data($data);
	      	redirect('admin/keuangan');
		}
		else{
			redirect('admin/keuangan/tambah');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

		$id = $this->input->post('id_keuangan');

		if($this->form_validation->run() == TRUE) 
		{
			$data = array();
		 	$data['keterangan']	= $this->input->post('keterangan');
		 	$data['tanggal'] 	= $this->input->post('tanggal');
	      	$data['nominal']	= $this->input->post('nominal');	
		
	      	$this->keuangan_model->update($id,$data);
	    ?>
	    	<script language="javascript">
                    alert('Data telah di edit.');
                    document.location="<?php echo site_url('admin/keuangan'); ?>";
         	</script>
        <?php
		}
		else{
			redirect('admin/keuangan/ubah/'.$id);
		}
	}
	
}
