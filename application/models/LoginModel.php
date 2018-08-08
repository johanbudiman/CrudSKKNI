<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getLoginAccess($username, $password)
	{
		$this->db->select('nama');
		$this->db->where('usrname', $username);
		$this->db->where('passw', md5($password));
		$temp = $this->db->get('t_admin')->row();

		$result = [];
		if (isset($temp)) {
			$result['nama_admin'] = $temp->nama;
		}
		return $result;
	}

}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */