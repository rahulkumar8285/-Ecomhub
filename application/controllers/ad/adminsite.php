<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('adminmenu.php');
class adminsite extends adminmenu{

      public $menu = array();
		public function __construct()
		{
		parent::__construct();
		//   $this->menu = new  SiteMenu;
		    $this->load->model('AdminModel','AM');
			if($this->session->userdata('AdminId') == Null){
				redirect('ad/adminauth/Login');
			}
		}


	public function index()
	{
		// $this->menu = array( 'activecls' => 'active',);
    unset($_SESSION['invalid-user']);
	$this->load->view('/ad/header',$this->menu);
	$this->load->view('/ad/index');
	$this->load->view('/ad/footer');
	}
   
    public function AddCategory(){
		$this->load->view('/ad/header');
        $this->load->view('/ad/addcategory');
		$this->load->view('/ad/footer');
    }

	public function AdminLogout(){
		$this->session->unset_userdata('AdminId'); 
		redirect('ad/adminauth/Login');
	}



}