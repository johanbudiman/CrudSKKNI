<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('nama_admin')) {
			redirect(site_url('Login'),'refresh');
		}

		$this->load->model('HomepageModel');
	}

	public function index()
	{
		$data = array('nama_admin' => $this->session->userdata('nama_admin'));
		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('Homepage', $data);
		$this->load->view('Footer');
	}

	public function TampilDataPeserta()
	{
		$this->load->model('DataPesertaModel');

		$data = array_merge(
			$this->DataPesertaModel->getDataPeserta(),
			array('nama_admin' => $this->session->userdata('nama_admin'))
		);

		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('DataPeserta', $data);
		$this->load->view('Footer');
		
	}

	public function TampilDataSertifikasi()
	{
		$data = array('nama_admin' => $this->session->userdata('nama_admin'));
		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('DataSertifikasi', $data);
		$this->load->view('Footer');
	}

	public function TampilLaporanSertifikasi()
	{
		$data = array('nama_admin' => $this->session->userdata('nama_admin'));
		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('LaporanSertifikasi', $data);
		$this->load->view('Footer');
	}

	public function BackupData()
	{
		echo "backup data";
	}

	public function Logout()
	{
		$this->session->unset_userdata('nama_admin');
		redirect(site_url('Login'),'refresh');
	}



	public function TampilInputDataPeserta()
	{

		$data = array('nama_admin' => $this->session->userdata('nama_admin'));

		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('InputDataPeserta', $data);
		$this->load->view('Footer');
		
	}

	public function SetInputDataPeserta()
	{
		$nik = $this->input->post('nik-input');
		$nama = $this->input->post('nama-input');
		$nohp = $this->input->post('nohp-input');
		$tmptlahir = $this->input->post('tmptlahir-input');
		$tgllahir = $this->input->post('tgllahir-input');
		$tgllahir = date('Y-m-d',strtotime($tgllahir));
		$email = $this->input->post('email-input');

		echo $tgllahir;



	}

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */