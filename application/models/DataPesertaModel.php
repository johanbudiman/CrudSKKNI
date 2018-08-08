<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataPesertaModel extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataPeserta()
	{
		$this->db->select('nik, nama, nohp, tmptlahir, tgllahir, email');
		$this->db->order_by('nama', 'asc');
		$temp = $this->db->get('t_data_pribadi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['nik'][$key] = $value->nik;
			$result['nama'][$key] = $value->nama;
			$result['nohp'][$key] = $value->nohp;
			$result['tmptlahir'][$key] = $value->tmptlahir;
			$result['tgllahir'][$key] = $value->tgllahir;
			$result['email'][$key] = $value->email;
		}

		return $result;
	}

}

/* End of file DataPesertaModel.php */
/* Location: ./application/models/DataPesertaModel.php */