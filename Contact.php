<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model{
	public function __construct(){
		$this->load->database();
	}


    public function getcontact($from = null, $to = null){
        $query = $this->db->select('*')
                    ->where('Contact.date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')
                    ->from ('contact')
                    ;

                    $query=$this->db->get();
                    if($query->num_rows() > 0){
                       $result = $query->result_array();
                       return $result;
                   }
                   else{
                       return false;
                   }
                    
    }

    public function get_data($from = null, $to = null){
		if (isset($from) && isset($to)){
			$query = $this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->get('contact');
		} else {
			$query = $this->db->get('contact');
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
