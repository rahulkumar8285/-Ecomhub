<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHomeCl extends CI_Controller {

    protected $AdminId = null;
    protected $data = null;

	public function __construct()
    {
      
        parent::__construct();
        if($this->session->userdata('adminid')){  		
	        $this->AdminId = $this->session->userdata('adminid'); 		
		}else{
            redirect('AdminCl/AdminAuthCl');
        }
       
    }

     public function index(){

        $data = ['id'=>$this->AdminId];
        $this->load->view('AdminView/header',$data);
        //  $this->load->view('dhasbord');
        //  $this->load->view('footer');
     }

}
