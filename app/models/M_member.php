<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
	public function cekMember($email){
		$this->db->where('email',$email);
		$hasil = $this->db->get('member');

		if ($hasil->num_rows() == 0) {
			return TRUE;
		}
	}

	public function buatMember($input){
		return $this->db->insert('member',$input);
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

	public function jmlBengkel($userid,$idkategori){
		$this->db->where('id_member',$userid);
		$this->db->where('id_kategori',$idkategori);
		$this->db->from('bengkel');

		return $this->db->count_all_results();
	}

	public function updateMember($id,$input){
		$this->db->where('id_member',$id);
		return $this->db->update('member',$input);
	}
}
