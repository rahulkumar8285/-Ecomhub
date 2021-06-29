<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class operation extends CI_Controller{

    public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
        $this->load->library('table');
	    $this->load->model('AdminModel','AM');
        if($this->session->userdata('AdminId') == Null){
            redirect('ad/adminauth/Login');
        }
		
	}

    public function AddCategory(){
        $data = array(
        'name' => $this->input->post('cname')
        );
        $result = $this->AM->AddData($data,'category');
        if($result){
            echo 1;
        }
    }

    public function ShowCategory(){
          $query = $this->AM->ShowData('category','DESC','id');
          $data = $query->result_array();
          echo json_encode($data);
    }

}