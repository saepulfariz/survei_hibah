<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('UserModel', 'user');
		$this->load->model('SurveiModel', 'survei');
	}
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['tim_survei'] = $this->user->getTimeSurvei();
		$data['valid'] = $this->survei->getValid();
		$data['novalid'] = $this->survei->getNotValid();
		$this->template->load('template/index', 'dashboard/index', $data);
	}
}
