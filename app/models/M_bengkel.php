<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bengkel extends CI_Model {
	public function dataBengkel($userid){
		$this->db->where('id_member',$userid);

		return $this->db->get('member')->row_array();
	}
}
