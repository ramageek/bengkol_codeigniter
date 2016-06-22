<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberM extends CI_Model {
	public function cekMember($email){
		$this->db->where('email',$email);
		$hasil = $this->db->get('member');

		if ($hasil->num_rows() == 0) {
			return TRUE;
		}
	}

	public function buatMember($input){
		$tambah = $this->db->insert('member',$input);

		return $tambah;
	}

	public function loginMember($email,$pass){
		$this->db->where('email',$email);
		$this->db->where('password',$pass);

		$hasil = $this->db->get('member');

		if ($hasil->num_rows() == 1) {
			return $hasil->row_array();
		} else {
			return FALSE;
		}
	}
}
