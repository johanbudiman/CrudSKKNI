<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataSertifikasiModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataSertifikasi()
	{
		$this->db->select('nik, nama, nohp, tmptlahir, tgllahir, email, tru_skema.skema, tru_tmptujikom.tmptujikom, rekomendasi, ttsertifikasi, organisasi');
		$this->db->order_by('tgllahir', 'desc');
		$this->db->where('t_data_pribadi.id = t_sertifikasi.id');
		$this->db->where('tru_skema.kd = t_sertifikasi.skema');
		$this->db->where('tru_tmptujikom.kd = t_sertifikasi.tmptujikom');
		$temp = $this->db->get('t_data_pribadi, tru_skema, tru_tmptujikom, t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['nik'][$key] = $value->nik;
			$result['nama'][$key] = $value->nama;
			$result['nohp'][$key] = $value->nohp;
			$result['tmptlahir'][$key] = $value->tmptlahir;
			$result['tgllahir'][$key] = $value->tgllahir;
			$result['email'][$key] = $value->email;
			$result['skema'][$key] = $value->skema;
			$result['tmptujikom'][$key] = $value->tmptujikom;
			$result['rekomendasi'][$key] = $value->rekomendasi;
			$result['ttsertifikasi'][$key] = $value->ttsertifikasi;
			$result['organisasi'][$key] = $value->organisasi;
		}

		return $result;
	}

}

/* End of file DataSertifikasiModel.php */
/* Location: ./application/models/DataSertifikasiModel.php */