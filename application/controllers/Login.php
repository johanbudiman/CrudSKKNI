<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('LoginModel');

		if ($this->session->userdata('nama_admin')) {
			redirect(site_url('Homepage'),'refresh');
		}
	}

	public function index()
	{
		if ($this->session->flashdata('login_invalid') ==! null) {
			$data = array('login_warning' => 'Username atau Password yang dimasukkan salah...' );
			$this->load->view('Login', $data);
		} else {
			$this->load->view('Login');
		}
	}

	public function Login()
	{
		$username = $this->input->post('username-input');
		$password = $this->input->post('password-input');

		$login_data = $this->LoginModel->getLoginAccess($username, $password);

		if (!empty($login_data['nama_admin'])) {
			$this->session->set_userdata($login_data);
			redirect('Homepage','refresh');
		} else {
			$this->session->set_flashdata('login_invalid', 'yes');
			redirect(site_url('Login'),'refresh');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */