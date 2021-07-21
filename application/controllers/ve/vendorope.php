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
        'selectcat'=> $this->input->post('selectcat'), 
        'publicstats'=> $this->input->post('publicstats'), 
        'siselectsizeze'=> $this->input->post('selectsize'), 
        'color'=> $this->input->post('color'), 
        'productmrp'=> $this->input->post('productmrp'), 
        'sellingprice'=> $this->input->post('sellingprice'), 
        'qunty'=> $this->input->post('qunty'), 
        'setstatus'=> $this->input->post('setstatus'), 
        'imgcolor'=> $this->input->post('imgcolor'), 
        'mainimg'=> $this->input->post('mainimg'), 
        'multimge'=> $this->input->post('multimge'), 
       );
        // $result =  $this->AD->AddData($data,'product');
echo '<pre>';
 print_r($data);
echo '</pre>';
        // if($result == 1){redirect('ve/vendorsite/ProdectList');}
   
    }


    // function Testfun(){
    //     // echo 'i am testing';

    //     $data = array(
    //     'radio' => $this->input->post('radio'),
    //     'colorcode' => $this->input->post('colorcode'),
    //     'mainprice' => $this->input->post('mainprice'),
    //     'sellingprice' => $this->input->post('sellingprice'),
    //     'qunt' => $this->input->post('qunt'),
    //     'image' => $this->input->post('image'),
    //     );

    //     echo '<pre>';
    //     print_r($data);

    // }



 }
?>