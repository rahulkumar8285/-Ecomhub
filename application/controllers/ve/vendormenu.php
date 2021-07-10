<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendormenu extends  CI_Controller{

    public $Vendor_id = Null;  
	  
    public function __construct()
	{	
      parent::__construct();
	  $this->load->model('AdminModel','AD');
	//   unset($_SESSION['mail-already']);
	  if($this->session->userdata('vender-id')){
		$this->Vendor_id = $this->session->userdata('vender-id');
	   }
	}

    
    public function menu(){
        $query =  $this->AD->SelectData('id',$this->Vendor_id,'vendor');
        $result['data'] =  $query->row();
       $this->load->view('ve/header.php',$result);
    }

  } 
 ?>