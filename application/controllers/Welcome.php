<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('SiteMenu.php');
class Welcome extends SiteMenu {

//    public $menu = Null;

	public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
	}

	public function index()
	{
	    SiteMenu::MenuBar();
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function Singupmsg(){
		$this->load->view('vesingcomp');
	}

}
