<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/ve/vendormenu.php");
class vendorsite extends vendormenu{

   public function __construct()
	{
      parent::__construct();
      $this->load->model('AdminModel','AD');
      vendormenu::menu();
   }

    public function index(){
       $this->load->view('ve/venderdhas');
       $this->load->view('ve/footer');
    }
    public function addprodect(){
      $query['data'] = $this->AD->ShowData('category','DESC','id');
      $this->load->view('ve/addprodect',$query);
      $this->load->view('ve/footer');
    }

    
  } 
 ?>