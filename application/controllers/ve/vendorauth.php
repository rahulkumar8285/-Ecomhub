<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendorauth extends CI_Controller {
	
	public $ImgArr = array();
	public function __construct()
	{	
	  parent::__construct();
	  $this->load->library('form_validation');
	  $this->load->model('ve/VendorModel','VD');
	  unset($_SESSION['mail-already']);
	}

    public function Singup(){
      $this->load->view('ve/singup.php');
    }

	public function MultiImg($file){
		$target_dir = "./upload/data/vendersingup/";
		print_r($file);
		$multiimag = [];
		for($i = 0; $i<count($file)-1;$i++){
		$multiimag = [ 'key'.$i => $target_file = $target_dir . basename($file['name'][$i])];
		  move_uploaded_file($file["tmp_name"][$i],$target_file);
		}
		print_r('<pre>');
		print_r($multiimag);
	}

	
    public function AuthSingup(){
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[vendor.email]');
		$this->form_validation->set_rules('Mobile', 'Mobile', 'required|is_unique[vendor.mobile]|integer');
		if ($this->form_validation->run()){
			$config['upload_path'] = './upload/data/vendersingup';
		    $config['allowed_types'] = 'jpeg|jpg|png';
		    $config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('venprofile'))
			{
				$data = array(
				'name' =>  $this->input->post('Full_Name'),
				'email' =>  $this->input->post('Email'),
				'mobile' =>  $this->input->post('Mobile'),
				'password' =>  md5($this->input->post('Password')),
				'profile' =>  $this->upload->data('file_name'),
			);
			 if($this->VD->AddData($data,'vendor')){
			   redirect('singup-comp');
			 }else{
				$this->load->view('ve/singup.php');
			  }
			}
			else
			{
				echo "not upload";
				echo  $this->upload->display_errors();
			}
		
		
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