<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rab extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('AdministrasiRabModel', 'rab');
	}

	public function index()
	{
		$id_survei = ($this->input->get('id_survei', true)) ? $this->input->get('id_survei', true) : 0;
		echo json_encode($this->rab->getRab($id_survei));
	}

	public function create()
	{
		$id_survei = ($this->input->post('id_survei', true)) ? $this->input->post('id_survei', true) : 0;
		$data = [
			'id_survei' => $id_survei,
			'nama' => $this->input->post('nama', true),
			'qty' => $this->input->post('qty', true),
			'harga' => $this->input->post('harga', true),
			'total' => $this->input->post('harga', true) * $this->input->post('qty', true),
		];

		$res = $this->rab->save($data);
		if ($res) {
			$data_res = [
				'icon' => 'success',
				'title' => 'Success',
				'text' => 'Add Success',
			];
		} else {
			$data_res = [
				'icon' => 'warning',
				'title' => 'Warning',
				'text' => 'Add Failed',
			];
		}

		echo json_encode($data_res);
	}

	public function edit($id)
	{
		$result = $this->rab->find($id);

		if (!$result) {
			$data_res = [
				'icon' => 'success',
				'title' => 'Success',
				'text' => 'Not Valid',
			];
			echo json_encode($data_res);
			die;
		}

		echo json_encode($result);
	}

	public function update($id)
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'qty' => $this->input->post('qty', true),
			'harga' => $this->input->post('harga', true),
			'total' => $this->input->post('harga', true) * $this->input->post('qty', true),
		];

		$res = $this->rab->update($id, $data);
		if ($res) {
			$data_res = [
				'icon' => 'success',
				'title' => 'Success',
				'text' => 'Update Success',
			];
		} else {
			$data_res = [
				'icon' => 'warning',
				'title' => 'Warning',
				'text' => 'Update Failed',
			];
		}

		echo json_encode($data_res);
	}



	public function delete($id)
	{
		$result = $this->rab->find($id);

		if (!$result) {
			$data_res = [
				'icon' => 'success',
				'title' => 'Success',
				'text' => 'Not Valid',
			];
			echo json_encode($data_res);
			die;
		}

		$res = $this->rab->delete($id);
		if ($res) {
			$data_res = [
				'icon' => 'success',
				'title' => 'Success',
				'text' => 'Delete Success',
			];
		} else {
			$data_res = [
				'icon' => 'warning',
				'title' => 'Warning',
				'text' => 'Delete Failed',
			];
		}
		echo json_encode($data_res);
	}
}
