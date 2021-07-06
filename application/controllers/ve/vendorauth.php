<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendorauth extends CI_Controller {
	public function __construct()
	{	
	  parent::__construct();
	  $this->load->library('form_validation');
	  unset($_SESSION['mail-already']);
	}

    // singup function


    public function Singup(){
      $this->load->view('ve/singup.php');
    }
	
    public function AuthSingup(){
	
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[vendor.email]');
		$this->form_validation->set_rules('Password', 'Password', 'required|is_unique[vendor.mobile]|integer');

		if ($this->form_validation->run()){
			
		}else{
			$this->session->set_flashdata('mail-already', 'You Email Already Exites !'); 
			$this->load->view('ve/singup.php');
		}
	}














	//login Function//
	// public function Login()
	// {
	// 	unset($_SESSION['invalid-user']);
	//   if($this->input->post('email') ||$this->input->post('pasword') ){
    //     // login auth //
	// 	 $email = $this->input->post('email');
	// 	 $pasword = $this->input->post('password');
	// 	// Data check //
    //       $result = $this->AM->SelectData('email',$email,'admin');
	// 	  if($result->num_rows()==1){
    //          $data =  $result->row();
	// 		  if($data->password == $pasword){
	// 			//create session//
	// 			 $this->session->set_userdata('AdminId', $data->id);
	// 		    //move to admin panel//
	// 			 redirect('ad/adminsite');
	// 		  }
	// 		  else{
	// 			$this->session->set_flashdata('invalid-user', 'You Password is Worng Pls Check Password !'); 
	// 			$this->load->view('ad/login');
			
	// 		  }
	// 	  }else{
		
	// 		 $this->session->set_flashdata('invalid-user', 'You Email And Password is Not Match !'); 
	// 		 // $this->session->set_flashdata('invalid-user', 'You Email And Password is Not Match !');
    //          $this->load->view('ad/login');
	// 		// data not in database
			
	// 	  }

	//   }else{
	// 	$this->load->view('ve/login');
	//   }

	// }


	

}