<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survei extends CI_Controller
{
	private $title = 'Survei';
	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('SurveiModel', 'survei');
		$this->load->model('AdministrasiModel', 'administrasi');
		$this->load->model('AdministrasiRabModel', 'rab');
		$this->load->model('RekomendasiModel', 'rekomendasi');
	}
	public function index()
	{
		$data['title'] = $this->title;
		$data['survei'] = $this->survei->findAll();
		$data['ket_lembaga'] = $this->survei->getEnum('ket_lembaga');
		$this->template->load('template/index', 'survei/index', $data);
	}

	public function new()
	{
		if ($this->session->userdata('id_role') == 3) {
			redirect('survei', 'refresh');
		}
		$data['title'] = $this->title;
		$data['ket_lembaga'] = $this->survei->getEnum('ket_lembaga');
		$data['label_ketua'] = $this->survei->getEnum('label_ketua');
		$data['legalitas'] = $this->survei->getEnum('legalitas');
		$data['status_tanah'] = $this->survei->getEnum('status_tanah');
		$this->template->load('template/index', 'survei/new', $data);
	}


	public function create()
	{
		if ($this->session->userdata('id_role') == 3) {
			redirect('survei', 'refresh');
		}
		$this->form_validation->set_rules('ket_lembaga', 'ket_lembaga', 'required');
		$this->form_validation->set_rules('nama_lembaga', 'nama_lembaga', 'required');
		$this->form_validation->set_rules('alamat_lembaga', 'alamat_lembaga', 'required');
		$this->form_validation->set_rules('label_ketua', 'label_ketua', 'required');
		$this->form_validation->set_rules('ketua_nama', 'ketua_nama', 'required');
		$this->form_validation->set_rules('sekretaris_nama', 'sekretaris_nama', 'required');
		$this->form_validation->set_rules('bendahara_nama', 'bendahara_nama', 'required');

		$this->form_validation->set_rules('ketua_nik', 'ketua_nik', 'required');
		$this->form_validation->set_rules('sekretaris_nik', 'sekretaris_nik', 'required');
		$this->form_validation->set_rules('bendahara_nik', 'bendahara_nik', 'required');
		$this->form_validation->set_rules('legalitas', 'legalitas', 'required');
		$this->form_validation->set_rules('nomor_legalitas', 'nomor_legalitas', 'required');
		$this->form_validation->set_rules('tanggal_legalitas', 'tanggal_legalitas', 'required');
		$this->form_validation->set_rules('no_bjb', 'no_bjb', 'required');
		$this->form_validation->set_rules('nama_bjb', 'nama_bjb', 'required');
		$this->form_validation->set_rules('status_tanah', 'status_tanah', 'required');
		$this->form_validation->set_rules('surat_penyataan_keaslian_nomor', 'surat_penyataan_keaslian_nomor', 'required');
		$this->form_validation->set_rules('surat_keterangan_domisili_nomor', 'surat_keterangan_domisili_nomor', 'required');
		$this->form_validation->set_rules('tidak_dapat_hibah_tahun_lalu', 'tidak_dapat_hibah_tahun_lalu', 'required');
		$this->form_validation->set_rules('no_npwp', 'no_npwp', 'required');
		$this->form_validation->set_rules('nama_npwp', 'nama_npwp', 'required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required');

		$this->form_validation->set_rules('indentitas', 'indentitas', 'required');
		$this->form_validation->set_rules('latar_belakang', 'latar_belakang', 'required');
		$this->form_validation->set_rules('maksud_tujuan', 'maksud_tujuan', 'required');
		$this->form_validation->set_rules('rincian_kegiatan', 'rincian_kegiatan', 'required');

		$this->form_validation->set_rules('usulan', 'usulan', 'required');
		$this->form_validation->set_rules('rekomendasi', 'rekomendasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->new();
		} else {
			$data = [
				'ket_lembaga' => $this->input->post('ket_lembaga', true),
				'nama_lembaga' => $this->input->post('nama_lembaga', true),
				'alamat_lembaga' => $this->input->post('alamat_lembaga', true),
				'label_ketua' => $this->input->post('label_ketua', true),
				'ketua_nama' => $this->input->post('ketua_nama', true),
				'ketua_nik' => $this->input->post('ketua_nik', true),
				'sekretaris_nama' => $this->input->post('sekretaris_nama', true),
				'sekretaris_nik' => $this->input->post('sekretaris_nik', true),
				'bendahara_nama' => $this->input->post('bendahara_nama', true),
				'bendahara_nik' => $this->input->post('bendahara_nik', true),
				'legalitas' =>  $this->input->post('legalitas', true),
				'nomor_legalitas' => $this->input->post('nomor_legalitas', true),
				'tanggal_legalitas' => $this->input->post('tanggal_legalitas', true),
				'no_bjb' => $this->input->post('no_bjb', true),
				'nama_bjb' => $this->input->post('nama_bjb', true),
				'status_tanah' => $this->input->post('status_tanah', true),
				'surat_penyataan_keaslian_nomor' => $this->input->post('surat_penyataan_keaslian_nomor', true),
				'surat_keterangan_domisili_nomor' => $this->input->post('surat_keterangan_domisili_nomor', true),
				'tidak_dapat_hibah_tahun_lalu' => $this->input->post('tidak_dapat_hibah_tahun_lalu', true),
				'no_npwp' => $this->input->post('no_npwp', true),
				'nama_npwp' => $this->input->post('nama_npwp', true),
				'no_hp' => $this->input->post('no_hp', true),
				'cid' => $this->session->userdata('id_user'),
				'uid' => $this->session->userdata('id_user'),
				'is_valid' => 0,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			];

			$res = $this->survei->save($data);

			$id_survei = $this->survei->getLastId();

			$data_administrasi = [
				'id_survei' => $id_survei,
				'indentitas' => $this->input->post('indentitas', true),
				'latar_belakang' => $this->input->post('latar_belakang', true),
				'maksud_tujuan' => $this->input->post('maksud_tujuan', true),
				'rincian_kegiatan' => $this->input->post('rincian_kegiatan', true),
			];

			$this->administrasi->insert($data_administrasi);

			$data_rekomendasi = [
				'id_survei' => $id_survei,
				'usulan' => $this->input->post('usulan', true),
				'rekomendasi' => $this->input->post('rekomendasi', true),
			];

			$this->rekomendasi->insert($data_rekomendasi);

			$this->rab->updateNew($id_survei);

			if ($res) {
				$this->alert->set('success', 'Success', 'Add Success');
			} else {
				$this->alert->set('warning', 'Warning', 'Add Failed');
			}
			redirect('survei', 'refresh');
		}
	}


	public function show($id)
	{
		$result = $this->survei->getAll($id);


		if (!$result) {
			$this->alert->set('warning', 'Warning', 'Not Valid');
			redirect('survei', 'refresh');
		}

		$data['title'] = $this->title;
		$data['survei'] = $result;
		$data['rab'] = $this->rab->getRab($id);
		$data['ket_lembaga'] = $this->survei->getEnum('ket_lembaga');
		$data['label_ketua'] = $this->survei->getEnum('label_ketua');
		$data['legalitas'] = $this->survei->getEnum('legalitas');
		$data['status_tanah'] = $this->survei->getEnum('status_tanah');
		$this->template->load('template/index', 'survei/show', $data);
	}


	public function valid($id_survei)
	{
		if ($this->session->userdata('id_role') == 3) {
			redirect('survei', 'refresh');
		}
		$result = $this->survei->find($id_survei);


		if (!$result) {
			$this->alert->set('warning', 'Warning', 'Not Valid');
			redirect('survei/' . $id_survei, 'refresh');
		}

		$data = [
			'is_valid' => 1,
			'updated_at' => date('Y-m-d H:i:s'),
			'uid' => $this->session->userdata('id_user'),
		];

		$res = $this->survei->update($id_survei, $data);
		if ($res) {
			$this->alert->set('success', 'Success', 'Valid Success');
		} else {
			$this->alert->set('warning', 'Warning', 'Valid Failed');
		}
		redirect('survei/' . $id_survei, 'refresh');
	}


	public function delete($id)
	{
		if ($this->session->userdata('id_role') == 3) {
			redirect('survei', 'refresh');
		}
		$result = $this->survei->find($id);

		if (!$result) {
			$this->alert->set('warning', 'Warning', 'Not Valid');
			redirect('survei', 'refresh');
		}

		$res = $this->survei->delete($id);
		$this->rab->deleteRab($id);
		$this->rekomendasi->deleteRekomendasi($id);
		$this->administrasi->deleteAdministrasi($id);

		if ($res) {
			$this->alert->set('success', 'Success', 'Delete Success');
		} else {
			$this->alert->set('warning', 'Warning', 'Delete Failed');
		}
		redirect('survei', 'refresh');
	}
}
