<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminmenu extends CI_Controller{

//    public $menu = Null;

	public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
	}

	public function Login()
	{
    
	$this->load->view('ad/index');
	}

}
