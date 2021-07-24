<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendorope extends  CI_Controller{

    public function __construct()
	{	
      parent::__construct();
	  $this->load->model('AdminModel','AD');
	//   unset($_SESSION['mail-already']);
      if($this->session->userdata('vender-id')==NULL){
		redirect('ve/vendorsite');
	   }
	}


    public function AddProdect(){
       $data = array(
        'userid'=> $this->session->userdata('vender-id'),
        'productname' => $this->input->post('productname'),
        'productband'=> $this->input->post('brandname'),
        'shortdisc'=> $this->input->post('shortdis'),
        'longdisc'=> $this->input->post('longdic'),
        'productspc'=> $this->input->post('prodectspc'),
        'categoryid'=> $this->input->post('selectcat'), 
        'status'=> $this->input->post('publicstats'),   
        'date'=>date('d-M-Y'),      
       );
       $result =  $this->AD->AddData($data,'product');
       if($result == 1){redirect('ve/ProdectList');}
      }
      
      function addvar(){
         $data = array(
            'selectsize' => $this->input->post('selectsize'),
            'color'=> $this->input->post('color'),
            'productmrp'=> $this->input->post('productmrp'),
            'sellingprice'=> $this->input->post('sellingprice'),
            'qunty'=> $this->input->post('qunty'),
            'setstatus'=> $this->input->post('setstatus'), 
         );

         for($i=0; $i < sizeof($data['selectsize']);$i++){
              $row = array();
              $row['userid'] =  $this->session->userdata('vender-id');
              $row['pid'] =  $this->input->post('pid');
              $row['selectsize'] = $data['selectsize'][$i];
              $row['color'] =  $data['color'][$i];
              $row['productmrp'] =   $data['productmrp'][$i];
              $row['sellingprice'] = $data['sellingprice'][$i];
              $row['qunty'] =  $data['qunty'][$i];
              $row['setstatus'] =  $data['setstatus'][$i];
              $result =  $this->AD->AddData($row,'variation'); 
           }
           redirect($_SERVER["HTTP_REFERER"]);
      }
 }
?>