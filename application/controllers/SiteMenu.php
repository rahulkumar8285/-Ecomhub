<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteMenu extends CI_Controller {
   
	public function index()
	{
		$this->load->view('index');
	}
   
    
    public function MenuBar(){
        $this->load->view('header');
    }

    public function AddCart(){
        
    } 

}
