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

	public function getLaporanSertifikasiBerdasarkanSkema()
	{
		$this->db->select('tru_skema.skema, count(t_sertifikasi.skema) as jumlah');
		$this->db->where('tru_skema.kd = t_sertifikasi.skema');
		$this->db->group_by('tru_skema.skema');
		$temp = $this->db->get('tru_skema, t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['cskema_sertifikasi'][$key] = $value->skema;
			$result['j_cskema_sertifikasi'][$key] = $value->jumlah;
		}

		return $result;
	}

	public function getLaporanSertifikasiBerdasarkanTempat()
	{
		$this->db->select('tru_tmptujikom.tmptujikom, count(t_sertifikasi.tmptujikom) as jumlah');
		$this->db->where('tru_tmptujikom.kd = t_sertifikasi.tmptujikom');
		$this->db->group_by('tru_tmptujikom.tmptujikom');
		$temp = $this->db->get('tru_tmptujikom, t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['ctmptujikom_sertifikasi'][$key] = $value->tmptujikom;
			$result['j_ctmptujikom_sertifikasi'][$key] = $value->jumlah;
		}

		return $result;
	}


	public function getLaporanSertifikasiBerdasarkanOrganisasi()
	{
		$this->db->select('organisasi, count(organisasi) as jumlah');
		$this->db->group_by('organisasi');
		$temp = $this->db->get('t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['corganisasi_sertifikasi'][$key] = $value->organisasi;
			$result['j_corganisasi_sertifikasi'][$key] = $value->jumlah;
		}

		return $result;
	}

	public function getLaporanSertifikasiBerdasarkanTanggalSertifikasi()
	{
		$this->db->select('ttsertifikasi, count(ttsertifikasi) as jumlah');
		$this->db->group_by('ttsertifikasi');
		$temp = $this->db->get('t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['cttsertifikasi_sertifikasi'][$key] = $value->ttsertifikasi;
			$result['j_cttsertifikasi_sertifikasi'][$key] = $value->jumlah;
		}

		return $result;
	}

	public function getLaporanSertifikasiBerdasarkanTanggalLahir()
	{
		$this->db->select('tgllahir, count(tgllahir) as jumlah');
		$this->db->where('t_data_pribadi.id = t_sertifikasi.id_data_pribadi');
		$this->db->group_by('tgllahir');
		$temp = $this->db->get('t_sertifikasi, t_data_pribadi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['ctgllahir_sertifikasi'][$key] = $value->tgllahir;
			$result['j_ctgllahir_sertifikasi'][$key] = $value->jumlah;
		}

		return $result;
	}

}

/* End of file DataSertifikasiModel.php */
/* Location: ./application/models/DataSertifikasiModel.php */