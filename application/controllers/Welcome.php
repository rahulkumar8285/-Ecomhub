<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('SiteMenu.php');
class Welcome extends SiteMenu {

   public $query = array();
	public function __construct()
	{
	    parent::__construct();
    	$this->load->model('SiteModel','SM');
	}

	public function index()
	{
		$this->SM->GetProduct();
		die();
	    SiteMenu::MenuBar();
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function Singupmsg(){
		$this->load->view('vesingcomp');
	}

}
