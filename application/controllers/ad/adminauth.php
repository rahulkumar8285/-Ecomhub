<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminauth extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
	    $this->load->model('AdminModel','AM');
		if($this->session->userdata('AdminId')){
			redirect('ad/adminsite');
		}
	}

	//login Function//
	public function Login()
	{
	  if($this->input->post('email') ||$this->input->post('pasword') ){
        // login auth //
		 $email = $this->input->post('email');
		 $pasword = $this->input->post('password');
		// Data check //
          $result = $this->AM->SelectData('email',$email,'admin');
		  if($result->num_rows()==1){
             $data =  $result->row();
			  if($data->password == $pasword){
				//create session//
				 $this->session->set_userdata('AdminId', $data->id);
			    //move to admin panel//
				 redirect('ad/adminsite');
			  }
			  else{
				$this->load->view('ad/login');
			
			  }
		  }else{
            $this->load->view('ad/login');
		  }

	  }else{
		$this->load->view('ad/login');
	  }

	}


	

}