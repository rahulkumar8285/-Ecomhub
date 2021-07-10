<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendorope extends  CI_Controller{

    public function __construct()
	{	
      parent::__construct();
	  $this->load->model('AdminModel','AD');
	//   unset($_SESSION['mail-already']);
      if($this->session->userdata('vender-id')){
		redirect('ve/vendorsite');
	   }
	}


    public function AddProdect(){
        echo 'i am prodect';
    }

 }
?>