<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class timevolcell extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_data(){
		$query = $this->db->get('timevolcell');
		if($query->num_rows() > 0){
			$result = $query->result_array();
			return $result;
		}
		else{
			return false;
		}
	}
}
?>