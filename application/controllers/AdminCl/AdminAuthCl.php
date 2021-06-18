<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminAuthCl extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','AM');
        if($this->session->userdata('adminid')){  		
		redirect('AdminCl/AdminHomeCl');
		}
	}

	public function index()
	{
		$this->load->view('AdminView/Login');
	}

	public function Login(){
		 
		$email =  $this->input->post('email');
		$psd = $this->input->post('psd');
		$result =  $this->AM->SelectData('email',$email,'admin');
		
		if($result->num_rows()==1){
			$data = $result->row();
			// print_r($data);
			// echo $data->password;
			if($data->password == $psd){
				$this->session->set_userdata('adminid',$data->id);
			 	redirect('AdminCl/AdminHomeCl');
				//echo "i am admin";
			}
			else{
			   redirect('AdminCl/AdminAuthCl');
			}
		}else{
			redirect('AdminCl/AdminAuthCl');
		}

	}


}