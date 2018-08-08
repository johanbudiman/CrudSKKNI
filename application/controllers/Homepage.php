<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('nama_admin')) {
			redirect(site_url('Login'),'refresh');
		}

		$this->load->model('HomepageModel');
		$this->load->model('DataPesertaModel');
		$this->load->model('DataSertifikasiModel');
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

	/*public function TampilDataSertifikasi()
	{
		$data = array('nama_admin' => $this->session->userdata('nama_admin'));
		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('DataSertifikasi', $data);
		$this->load->view('Footer');
	}*/

	public function TampilLaporanSertifikasi()
	{
		$data = array_merge(
			$this->DataSertifikasiModel->getDataSertifikasi(),
			$this->DataSertifikasiModel->getLaporanSertifikasiBerdasarkanSkema(),
			$this->DataSertifikasiModel->getLaporanSertifikasiBerdasarkanTempat(),
			$this->DataSertifikasiModel->getLaporanSertifikasiBerdasarkanOrganisasi(),
			$this->DataSertifikasiModel->getLaporanSertifikasiBerdasarkanTanggalSertifikasi(),
			array('nama_admin' => $this->session->userdata('nama_admin'))
		);
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

		$data = array_merge(
			$this->DataPesertaModel->getSkema(),
			$this->DataPesertaModel->getTempatUjiKompetensi(),
			array('nama_admin' => $this->session->userdata('nama_admin'))
		);

		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('InputDataPeserta', $data);
		$this->load->view('Footer');
		
	}

	public function InsertInputDataPeserta()
	{
		$nik = $this->input->post('nik_input');
		$nama = $this->input->post('nama_input');
		$nohp = $this->input->post('nohp_input');
		$tmptlahir = $this->input->post('tmptlahir_input');
		$tgllahir = $this->input->post('tgllahir_input');
		$tgllahir = date('Y-m-d',strtotime($tgllahir));
		$email = $this->input->post('email_input');
		$organisasi = $this->input->post('organisasi_input');
		$skema = $this->input->post('pilih_skema');
		$tmptujikom = $this->input->post('pilih_tempat_ujian');
		$rekomendasi = $this->input->post('rekomendasi_input');
		$tglsertifikasi = $this->input->post('tglsertifikasi_input');
		$tglsertifikasi = date('Y-m-d',strtotime($tglsertifikasi));

		$this->DataPesertaModel->setDataPeserta($nik, $nama, $nohp, $tmptlahir, $tgllahir, $email, $organisasi, $skema, $tmptujikom, $rekomendasi, $tglsertifikasi);

		$this->TampilDataPeserta();		

	}

	public function DeleteDataPeserta()
	{
		$id_data_pribadi = $this->input->post('delete_peserta_button');

		$this->DataPesertaModel->DeleteDataPeserta($id_data_pribadi);

		redirect('Homepage/TampilDataPeserta','refresh');
	}

	public function EditDataPeserta()
	{
		$id_data_pribadi = $this->input->post('edit_peserta_button');

		$data = array_merge(
			$this->DataPesertaModel->getSkema(),
			$this->DataPesertaModel->getTempatUjiKompetensi(),
			$this->DataPesertaModel->getDataPesertaIndividual($id_data_pribadi),
			array('nama_admin' => $this->session->userdata('nama_admin'))
		);

		$this->load->view('Header', $data);
		$this->load->view('Navbar', $data);
		$this->load->view('Sidebar', $data);
		$this->load->view('EditDataPeserta', $data);
		$this->load->view('Footer');
	}

	public function UpdateDataPeserta()
	{
		$id_data_pribadi = $this->input->post('update_peserta_button');
		$nik = $this->input->post('nik_input');
		$nama = $this->input->post('nama_input');
		$nohp = $this->input->post('nohp_input');
		$tmptlahir = $this->input->post('tmptlahir_input');
		$tgllahir = $this->input->post('tgllahir_input');
		$tgllahir = date('Y-m-d',strtotime($tgllahir));
		$email = $this->input->post('email_input');
		$organisasi = $this->input->post('organisasi_input');
		$skema = $this->input->post('pilih_skema');
		$tmptujikom = $this->input->post('pilih_tempat_ujian');
		$rekomendasi = $this->input->post('rekomendasi_input');
		$tglsertifikasi = $this->input->post('tglsertifikasi_input');
		$tglsertifikasi = date('Y-m-d',strtotime($tglsertifikasi));


		$this->DataPesertaModel->updateDataPeserta($id_data_pribadi, $nik, $nama, $nohp, $tmptlahir, $tgllahir, $email, $organisasi, $skema, $tmptujikom, $rekomendasi, $tglsertifikasi);

		$this->TampilDataPeserta();	
	}

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */
