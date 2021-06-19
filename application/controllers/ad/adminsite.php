<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('adminmenu.php');
class adminsite extends adminmenu{

//    public $menu = Null;

	public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
    $this->load->view('/ad/header');
	}

	public function index()
	{
	$this->load->view('/ad/index');
	}
   
    public function AddDepartments(){
        $this->load->view('/ad/adddepartments');
    }



}