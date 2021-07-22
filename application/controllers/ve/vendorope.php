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
       if($result == 1){redirect('ve/vendorsite/ProdectList');}
      }
      
      function addvar(){
         $userid =  $this->session->userdata('vender-id');
         $pid = $this->input->post('pid'); 

         $data = array(
            'userid' =>  $this->session->userdata('vender-id'),
            'pid' => $this->input->post('pid'),
            'selectsize' => implode(',',$this->input->post('selectsize')),
            'color'=> implode(',',$this->input->post('color')),
            'productmrp'=> implode(',',$this->input->post('productmrp')),
            'sellingprice'=> implode(',',$this->input->post('sellingprice')),
            'qunty'=> implode(',',$this->input->post('qunty')),
            'setstatus'=> implode(',',$this->input->post('setstatus')), 
            'imgcolor' =>  implode(',',$this->input->post('imgcolor')),
            'mainimg ' =>  implode(',',$this->input->post('mainimg')),
         );
         
           $multimge  =   $this->input->post('multimge');
            // echo sizeof($data['multimge']);
            $imgfind = array();
            $img = null;
            for($i=0;$i<sizeof($multimge);$i++){
               $imgfind[$i] = implode(',',$multimge[$i]);
            }
            for($i=0;$i<sizeof($imgfind);$i++){
               $img = implode('/',$imgfind);
            }


         echo '<pre>';
         print_r($data);
         // print_r($imgfind);
         print_r($img);

         echo '</pre>';
         // $result =  $this->AD->AddData($data,'variation');
    }


 }
?>