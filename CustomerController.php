<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class CustomerController extends CI_Controller{

    var $data  = array(); 
	 public function __construct(){

		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library("pagination");
        $this->load->model("Customer");
		
	}

    public function index() {
        $data['customer'] = $this->Customer->getmobilerec();
        $this->load->view('CustomerDetail/form',$data);
    }

    public function filter() {
        $data['customer'] = $this->Customer->getmobilerec();
        /*if($this->input->post()){
            $data['customer'] = $this->Customer->getmobilerec();
        }
        else{
            return false;
        }*/
        $this->load->view('CustomerDetail/result',$data);
    }
}
?>