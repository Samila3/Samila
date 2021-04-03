<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model{
	public function __construct(){
		$this->load->database();
	}


    public function getmobilerec(){
        $query = $this->db->select('*')
                    ->from ('customer')
                    ->where ('customer.mobile=10');

        $query = $this->db->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $mob){
                $data[] = $mob;
            }
            return $data;
        }$query->free_result();
                    
    }

    public function get_data(){
		if (isset($mobile)){
			$query = $this->db->where('mobile=10')->get('Customer');
		} else {
			$query = $this->db->get('Customer');
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
