<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['titletag'] = "dasboard member";

		$this->load->view('backend-layouts/head',$data);
		$this->load->view('member/index');
		$this->load->view('backend-layouts/foot');
	}

	public function login() {
		$data['titletag'] = "login member";

		$this->load->view('backend-layouts/head',$data);
		$this->load->view('member/login');
		$this->load->view('backend-layouts/foot');
	}

	public function register() {
		$data['titletag'] = "register member";

		$this->load->view('backend-layouts/head',$data);
		$this->load->view('member/register');
		$this->load->view('backend-layouts/foot');
	}
}
