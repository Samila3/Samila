<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class ContactController extends CI_Controller{

    var $data  = array(); 
	 public function __construct(){

		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library("pagination");
        $this->load->model("Contact");
		
	}

    public function index() {
        $data['contact'] = $this->Contact->getcontact();
        $this->load->view('ContactDetail/form',$data);
    }

    public function filter() {
        $this->load->model('Contact');
      if($this->input->post()){
         $from = $_POST['from'];
         $to = $_POST['to'];
         $data['contact'] = $this->Contact->getcontact($from, $to);
     }else {
         $data['contact'] = $this->Contact->getcontact();
     }
        $this->load->view('ContactDetail/result', $data);
    }
}
?>