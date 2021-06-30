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
        // print_r($result);
    }

    public function ShowCategory(){
          $query = $this->AM->ShowData('category','DESC','id');
          $data = $query->result_array();
          echo json_encode($data);
    }

    // Delete Data 
    public function Delete(){
         $Deletid = $this->input->post('deletid');
         $result = $this->AM->DeleteData($Deletid,'id','category');
         echo ($result)? true : false ; }

     public function SelectData(){
        $editid = $this->input->post('ediid');
        $query =  $this->AM->SelectData('id',$editid,'category');
        $data = $query->row();      
        // print_r($data);
        echo json_encode($data);
    }    

    public function EditData(){
        $eid = $this->input->post('eid');
        $data = array(
        'name' => $this->input->post('cname')
        );
        $result = $this->AM->UpdataData($data,$eid,'id','category');
    }

}