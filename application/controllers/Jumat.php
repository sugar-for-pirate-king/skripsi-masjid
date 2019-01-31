<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumat extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('jumat_model');
	}

	public function index()
	{
		if(!$this->jumat_model->is_LoggedIn())
		{
			redirect('login');
		}

		$data = $this->jumat_model->get_all()->result();

		$this->load->view('admin/pages/hal_jumat', array('data_artikel' => $data));
	}

	public function add()
	{
		$this->load->view('admin/pages/add_jumat');
	}

	public function edit($id)
	{
		$data = $this->jumat_model->get_by_id($id)->row();
		$this->load->view('admin/pages/edit_jumat', array('data_artikel' => $data));
	}
	
	public function delete($id)
	{
		$this->jumat_model->delete($id);
	?>
		<script language="javascript">
       		    alert('Data telah di hapus.');
                document.location="<?php echo site_url('admin/jumat'); ?>";
        </script>
	<?php
	}

	public function lihat_jumat()
	{
		$data = $this->jumat_model->get_all()->result();
		$this->load->view('user/pages/hal_jumat', array('jumat' => $data));
	}

	public function save()
	{	
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('muadzin', 'Muadzin', 'required');
		$this->form_validation->set_rules('imam', 'Imam', 'required');
		$this->form_validation->set_rules('khatib', 'Khatib', 'required');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['tanggal']	 = $this->input->post('tanggal');
		 	$data['jam']		 = $this->input->post('jam');
		 	$data['muadzin'] 	 = $this->input->post('muadzin');
		 	$data['imam']		 = $this->input->post('imam');
		 	$data['khatib']		 = $this->input->post('khatib');

			$this->jumat_model->input_data($data);
			redirect('admin/jumat');
		}
		else{
			redirect('admin/jumat/tambah');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('muadzin', 'Muadzin', 'required');
		$this->form_validation->set_rules('imam', 'Imam', 'required');
		$this->form_validation->set_rules('khatib', 'Khatib', 'required');

		$id   = $this->input->post('id_jumat');

		if($this->form_validation->run() == TRUE)
		{
			$data = array();
		 	$data['tanggal']	 = $this->input->post('tanggal');
		 	$data['jam']		 = $this->input->post('jam');
		 	$data['muadzin'] 	 = $this->input->post('muadzin');
		 	$data['imam']		 = $this->input->post('imam');
		 	$data['khatib']		 = $this->input->post('khatib');

			$this->jumat_model->update($id,$data);
		?>
			<script language="javascript">
                    alert('Data telah di edit.');
                    document.location="<?php echo site_url('admin/jumat'); ?>";
         	</script>
        <?php
		}
		else{
			redirect('admin/jumat/ubah/'.$id);
		}
	}

}