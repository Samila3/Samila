<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class timevolcell extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_data($from = null, $to = null){
		if (isset($from) && isset($to)){
			$query = $this->db->where('revdate BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->get('timevolcell');
		} else {
			$query = $this->db->get('timevolcell');
		}
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