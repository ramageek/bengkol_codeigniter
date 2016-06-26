<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bengkel extends CI_Model {
	public function dataBengkel($userid){
		$this->db->where('id_member',$userid);

		return $this->db->get('bengkel')->result_array();
	}

	public function getIdBengkelTerakhir(){
		$this->db->select('id_bengkel');
		return $this->db->get('bengkel')->num_rows();
	}

	public function buatBengkel($input){
		return $this->db->insert('bengkel',$input);
	}
}
