<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class TimevolcellController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('timevolcell');
    }
    public function index() {
        //get data 
        if($this->input->post()){
            $from = $_POST['from'];
            $to = $_POST['to'];
            $data['cellid'] = $this->timevolcell->get_data($from, $to);
        }else {
            $data['cellid'] = $this->timevolcell->get_data();
        }
        //load view file
        $this->load->view('timevolcell', $data);
    }
}
?>