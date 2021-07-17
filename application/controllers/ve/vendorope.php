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
           'size'=> $this->input->post('size'), 
        'userid'=> $this->session->userdata('vender-id'),
        'productname' => $this->input->post('productname'),
        'productband'=> $this->input->post('brandname'),
        'shortdisc'=> $this->input->post('shortdis'),
        'longdisc'=> $this->input->post('longdic'),
        'color'=> $this->input->post('color'), 
        'sellprice'=> $this->input->post('sellprice'), 
        'qunty'=> $this->input->post('qunty'), 
        'img'=> $this->input->post('img'), 

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