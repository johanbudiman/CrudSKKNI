<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataPesertaModel extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataPeserta()
	{
		$this->db->select('t_data_pribadi.id, nik, nama, nohp, tmptlahir, tgllahir, email, tru_skema.skema, tru_tmptujikom.tmptujikom, rekomendasi, ttsertifikasi, organisasi');
		$this->db->order_by('nama', 'asc');
		$this->db->where('t_data_pribadi.id = t_sertifikasi.id');
		$this->db->where('tru_skema.kd = t_sertifikasi.skema');
		$this->db->where('tru_tmptujikom.kd = t_sertifikasi.tmptujikom');
		$temp = $this->db->get('t_data_pribadi, tru_skema, tru_tmptujikom, t_sertifikasi')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['id_data_pribadi'][$key] = $value->id;
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

	public function getDataPesertaIndividual($id_data_pribadi)
	{
		$this->db->select('t_data_pribadi.id, nik, nama, nohp, tmptlahir, tgllahir, email, tru_skema.skema, tru_tmptujikom.tmptujikom, rekomendasi, ttsertifikasi, organisasi');
		$this->db->order_by('nama', 'asc');
		$this->db->where('t_data_pribadi.id = t_sertifikasi.id');
		$this->db->where('tru_skema.kd = t_sertifikasi.skema');
		$this->db->where('tru_tmptujikom.kd = t_sertifikasi.tmptujikom');
		$this->db->where('t_data_pribadi.id', $id_data_pribadi);
		$temp = $this->db->get('t_data_pribadi, tru_skema, tru_tmptujikom, t_sertifikasi')->row();

		$result = [];
		if (isset($temp)) {
			$result['id_data_pribadi'] = $temp->id;
			$result['nik'] = $temp->nik;
			$result['nama'] = $temp->nama;
			$result['nohp'] = $temp->nohp;
			$result['tmptlahir'] = $temp->tmptlahir;
			$result['tgllahir'] = $temp->tgllahir;
			$result['email'] = $temp->email;
			$result['skema'] = $temp->skema;
			$result['tmptujikom'] = $temp->tmptujikom;
			$result['rekomendasi'] = $temp->rekomendasi;
			$result['ttsertifikasi'] = $temp->ttsertifikasi;
			$result['organisasi'] = $temp->organisasi;
		}

		return $result;
	}


	public function getSkema()
	{
		$this->db->select('kd, skema');
		$this->db->order_by('kd', 'asc');
		$temp = $this->db->get('tru_skema')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['kd_skema'][$key] = $value->kd;
			$result['nama_skema'][$key] = $value->skema;
		}

		return $result;
	}

	public function getTempatUjiKompetensi()
	{
		$this->db->select('kd, tmptujikom');
		$this->db->order_by('kd', 'asc');
		$temp = $this->db->get('tru_tmptujikom')->result();

		$result = [];
		foreach ($temp as $key => $value) {
			$result['kd_tmptujikom'][$key] = $value->kd;
			$result['nama_tmptujikom'][$key] = $value->tmptujikom;
		}

		return $result;
	}


	public function setDataPeserta($nik, $nama, $nohp, $tmptlahir, $tgllahir, $email, $organisasi, $skema, $tmptujikom, $rekomendasi, $tglsertifikasi)
	{
		 $data = array(
			'nik' => $nik, 
			'nama' => $nama,
			'nohp' => $nohp,
			'tmptlahir' => $tmptlahir,
			'tgllahir' => $tgllahir, 
			'email' => $email
		);

		$this->db->insert('t_data_pribadi', $data);

		$this->db->select('id');
		$this->db->where('nik', $nik);
		$this->db->order_by('id', 'desc');
		$temp = $this->db->get('t_data_pribadi',1)->row();

		if (isset($temp)) {
			$id_data_pribadi = $temp->id;

			$data_sertifikasi = array(
				'skema' => $skema, 
				'tmptujikom' => $tmptujikom,
				'rekomendasi' => $rekomendasi,
				'ttsertifikasi' => $tglsertifikasi,
				'organisasi' => $organisasi, 
				'id_data_pribadi' => $id_data_pribadi
			);

			$this->db->insert('t_sertifikasi', $data_sertifikasi);
		}

		
	}


	public function DataPeserta($id_data_pribadi)
	{
		$this->db->where('id', $id_data_pribadi);
		return $this->db->delete('t_data_pribadi');
	}
}

/* End of file DataPesertaModel.php */
/* Location: ./application/models/DataPesertaModel.php */