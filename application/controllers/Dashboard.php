<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		cekLogin();
		$data['title'] = "Dashboard";
		$this->template->load('template/index', 'dashboard/index', $data);
	}
}
