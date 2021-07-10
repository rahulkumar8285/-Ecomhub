<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class vendoraction extends CI_Controller{

    public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
	    $this->load->model('AdminModel','AM');
        if($this->session->userdata('AdminId') == Null){
            redirect('ad/adminauth/Login');
        }
		
	}
// vendor status change

public function VeStatusCh(){
    echo 'function run';
}


}