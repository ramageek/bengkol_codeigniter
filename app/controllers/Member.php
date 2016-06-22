<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('MemberM','mm');
		$this->load->helper('security');
	}

	public function index() {
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('noaccess','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$data['mainContent'] = 'member/member';
		$data['titletag'] = "dasboard member";

		$this->load->view('backend-layouts/head',$data);
		$this->load->view('member/index');
		$this->load->view('backend-layouts/foot');
	}

	public function register() {
		$input = array(
			array(
				'field'=>'nama',
				'rules'=>'trim|max_length[100]|min_length[3]'
			),
			array(
				'field'=>'email',
				'rules'=>'trim|valid_email|max_length[150]|min_length[5]|required'
			),
			array(
				'field'=>'password1',
				'rules'=>'trim|max_length[50]|min_length[5]|required'
			),
			array(
				'field'=>'password2',
				'rules'=>'trim|max_length[50]|min_length[5]|matches[password1]'
			),
			array(
				'field'=>'keterangan',
				'rules'=>'trim'
			)
		);

		$this->form_validation->set_rules($input);

		if ($this->form_validation->run() == FALSE) {
			$data['titletag'] = "register member";

			$this->load->view('backend-layouts/head',$data);
			$this->load->view('member/register');
			$this->load->view('backend-layouts/foot');
		} else {
			$email = $this->input->post('email');
			if ($this->mm->cekMember($email)) {
				$input = array(
					'email'=>$this->input->post('email'),
					'password'=>do_hash($this->input->post('password1'),'sha256')
				);
				if ($this->input->post('nama') != NULL) {
					$input['nama'] = $this->input->post('nama');
				}
				if ($this->input->post('keterangan') != NULL) {
					$input['keterangan'] = $this->input->post('keterangan');
				}
				if ($this->mm->buatMember($input)) {
					$this->session->set_flashdata('registered','Selamat, anda telah terdaftar di BengkOL! Terima kasih telah menjadi member BengkOL.');

					redirect(base_url('member/login'));
				} else {
					$this->session->$this->session->set_flashdata('unregistered','Mohon maaf, data anda tidak bisa kami proses. Silakan ulangi beberapa saat lagi.');

					redirect(base_url('member/login'));
				}
			} else {
				$this->session->set_flashdata('already','Mohon maaf, email yang anda masukkan telah terdaftar.');

				redirect(base_url('member/register'));
			}
		}
	}

	public function login() {
		$input = array(
			array(
				'field'=>'email',
				'rules'=>'trim|valid_email|max_length[150]|min_length[5]|required'
			),
			array(
				'field'=>'password',
				'rules'=>'trim|max_length[50]|min_length[5]|required'
			)
		);

		$this->form_validation->set_rules($input);

		if ($this->form_validation->run() == FALSE) {
			$data['titletag'] = "login member";

			$this->load->view('backend-layouts/head',$data);
			$this->load->view('member/login');
			$this->load->view('backend-layouts/foot');
		} else {
			$email = $this->input->post('email');
			$pass = do_hash($this->input->post('password'),'sha1');
			$log = $this->mm->loginMember($email,$pass);

			if($log) {
				$userdata = array(
					'userid'=>$log['id_member'],
					'nama'=>$log['nama'],
					'loggedin'=>TRUE
				);

				$this->session->set_userdata($userdata);
				$this->session->set_flashdata('loggedIn','Selamat datang member BengkOL.');

				redirect(base_url('member'));
			} else {
				$this->session->set_flashdata('unloggedIn','Mohon maaf, email dan password yang anda masukkan tidak valid.');

				redirect(base_url('member/login'));
			}
		}
	}

	public function logout(){
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('noaccess','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('loggedin');

		redirect(base_url('member/login'));
	}
}
