<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_member extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_member','mm');
		$this->load->model('M_bengkel','mb');
		$this->load->helper('security');
	}

	public function index() {
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('unLoggedInNotif','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$data['mainContent'] = 'vMIndex';
		$data['titletag'] = 'dasboard member';

		$this->load->view('backend-layouts/vHead',$data);
		$this->load->view('vMLayout');
		$this->load->view('backend-layouts/vFoot');
	}

	public function bengkel() {
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('unLoggedInNotif','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$data['dataBengkel'] = $this->mb->dataBengkel($this->session->userdata('userid'));
		$data['mainContent'] = 'vMBengkel';
		$data['titletag'] = 'bengkel member';

		$this->load->view('backend-layouts/vHead',$data);
		$this->load->view('vMLayout',$data);
		$this->load->view('backend-layouts/vFoot');
	}

	public function tambahBengkel() {
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('unLoggedInNotif','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$input = array(
			array(
				'field'=>'kategori',
				'rules'=>'trim|max_length[1]'
			),
			array(
				'field'=>'nama',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'provinsi',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'kotakab',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'kecamatan',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'desakel',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'jalan',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'nomor',
				'rules'=>'trim|max_length[50]'
			),
			array(
				'field'=>'telepon',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'keterangan',
				'rules'=>'trim'
			),
			array(
				'field'=>'latitude',
				'rules'=>'trim|max_length[100]'
			),
			array(
				'field'=>'longitude',
				'rules'=>'trim|max_length[100]'
			)
		);

		$this->form_validation->set_rules($input);

		if ($this->form_validation->run() == FALSE) {
			$data['dataBengkel'] = $this->mb->dataBengkel($this->session->userdata('userid'));
			$data['mainContent'] = 'vMBengkelTambah';
			$data['titletag'] = 'bengkel member';

			$this->load->view('backend-layouts/vHead',$data);
			$this->load->view('vMLayout',$data);
			$this->load->view('backend-layouts/vFoot');
		} else {
			$input = array(
				'id_kategori'=>$this->input->post('kategori'),
				'nama'=>$this->input->post('nama'),
				'provinsi'=>$this->input->post('provinsi'),
				'kota_kabupaten'=>$this->input->post('kotakab'),
				'jalan'=>$this->input->post('jalan')
			);
			$input['id_bengkel'] = $idBengkel = $this->mm->getIdBengkelTerakhir()+1;
			if (!empty($this->input->post('kecamatan'))) {
				$input['kecamatan'] = $this->input->post('kecamatan');
			}
			if (!empty($this->input->post('desakel'))) {
				$input['desa_kelurahan'] = $this->input->post('desakel');
			}
			if (!empty($this->input->post('nomor'))) {
				$input['nomor'] = $this->input->post('nomor');
			}
			if (!empty($this->input->post('telepon'))) {
				$input['telepon'] = $this->input->post('telepon');
			}
			if (!empty($this->input->post('keterangan'))) {
				$input['keterangan'] = $this->input->post('keterangan');
			}
			if (!empty($this->input->post('latitude'))) {
				$input['latitude'] = $this->input->post('latitude');
			}
			if (!empty($this->input->post('longitude'))) {
				$input['longitude'] = $this->input->post('longitude');
			}
			if (!empty($_FILES['avatar'])) {
				$namaFile = explode('.', basename($_FILES['avatar']['name']));
				$jmlArr = count($namaFile);
				$renameFile = strtolower("avatar-bengkel-".$idBengkel.'.'.$namaFile[$jmlArr-1]);

				$config['upload_path'] = './assets/images/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['file_name'] = $renameFile;
				$config['overwrite'] = true;

				$this->load->library('Upload',$config);

				if ($this->upload->do_upload('avatar')) {
					$input['avatar'] = $this->upload->data('file_name');
				}
			}

			echo print_r($input).'<br/>';
		}
	}

	public function editMember(){
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('unLoggedInNotif','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$input = array(
			array(
				'field'=>'nama',
				'rules'=>'trim|max_length[100]|min_length[3]'
			),
			array(
				'field'=>'email',
				'rules'=>'trim|max_length[150]|min_length[5]|required'
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
			$data['bMobil'] = $this->mm->jmlBengkel($this->session->userdata['userid'],1);
			$data['bMotor'] = $this->mm->jmlBengkel($this->session->userdata['userid'],2);
			$data['mainContent'] = 'vMEditMember';
			$data['titletag'] = 'edit member';

			$this->load->view('backend-layouts/vHead',$data);
			$this->load->view('vMLayout',$data);
			$this->load->view('backend-layouts/vFoot');
		} else {
			$input = array(
				'email'=>$this->input->post('email'),
				'password'=>do_hash($this->input->post('password1'),'sha1')
			);

			if (!empty($this->input->post('nama'))) {
				$input['nama'] = $this->input->post('nama');
			}
			if (!empty($this->input->post('keterangan'))) {
				$input['keterangan'] = $this->input->post('keterangan');
			}
			if (!empty($_FILES['avatar'])) {
				$namaFile = explode('.', basename($_FILES['avatar']['name']));
				$jmlArr = count($namaFile);
				$renameFile = strtolower("avatar-member-".$this->session->userdata['userid'].'.'.$namaFile[$jmlArr-1]);

				$config['upload_path'] = './assets/images/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['file_name'] = $renameFile;
				$config['overwrite'] = true;

				$this->load->library('Upload',$config);

				if ($this->upload->do_upload('avatar')) {
					$input['avatar'] = $this->upload->data('file_name');
				}
			}
			
			if ($this->mm->updateMember($this->session->userdata['userid'],$input)) {
				$this->session->set_flashdata('loggedInNotif','Berhasil update data');

				redirect(base_url('member/edit-member'));
			} else {
				$this->session->set_flashdata('loggedInNotif','Data tidak di update');

				redirect(base_url('member/edit-member'));
			}
		}
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

			$this->load->view('backend-layouts/vHead',$data);
			$this->load->view('vMRegister');
			$this->load->view('backend-layouts/vFoot');
		} else {
			$email = $this->input->post('email');
			if ($this->mm->cekMember($email)) {
				$input = array(
					'email'=>$this->input->post('email'),
					'password'=>do_hash($this->input->post('password1'),'sha1')
				);
				if (!empty($this->input->post('nama'))) {
					$input['nama'] = $this->input->post('nama');
				}
				if (!empty($this->input->post('keterangan'))) {
					$input['keterangan'] = $this->input->post('keterangan');
				}
				if ($this->mm->buatMember($input)) {
					$this->session->set_flashdata('unLoggedInNotif','Selamat, anda telah terdaftar di BengkOL! Terima kasih telah menjadi member BengkOL.');

					redirect(base_url('member/login'));
				} else {
					$this->session->$this->session->set_flashdata('unLoggedInNotif','Mohon maaf, data anda tidak bisa kami proses. Silakan ulangi beberapa saat lagi.');

					redirect(base_url('member/login'));
				}
			} else {
				$this->session->set_flashdata('unLoggedInNotif','Mohon maaf, email yang anda masukkan telah terdaftar.');

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

			$this->load->view('backend-layouts/vHead',$data);
			$this->load->view('vMLogin');
			$this->load->view('backend-layouts/vFoot');
		} else {
			$email = $this->input->post('email');
			$pass = do_hash($this->input->post('password'),'sha1');
			$log = $this->mm->loginMember($email,$pass);

			if($log) {
				$userdata = array(
					'userid'=>$log['id_member'],
					'nama'=>$log['nama'],
					'email'=>$log['email'],
					'avatar'=>$log['avatar'],
					'keterangan'=>$log['keterangan'],
					'terdaftar'=>$log['terdaftar'],
					'loggedin'=>TRUE
				);

				$this->session->set_userdata($userdata);
				$this->session->set_flashdata('loggedInNotif','Selamat datang member BengkOL.');

				redirect(base_url('member'));
			} else {
				$this->session->set_flashdata('unLoggedInNotif','Mohon maaf, email dan password yang anda masukkan tidak valid.');

				redirect(base_url('member/login'));
			}
		}
	}

	public function logout(){
		if ($this->session->userdata('loggedin') == FALSE) {
			$this->session->set_flashdata('unLoggedInNotif','Silakan login terlebih dahulu!');

			redirect(base_url('member/login'));
		}

		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('loggedin');

		redirect(base_url('member/login'));
	}
}
