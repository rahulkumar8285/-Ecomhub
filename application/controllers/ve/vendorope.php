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
              $row['date'] = date('d-M-Y');
              $result =  $this->AD->AddData($row,'variation'); 
           }
           redirect($_SERVER["HTTP_REFERER"]);
           
         }

      function upldatevar(){
         $row = array(
            'selectsize' => $this->input->post('selectsize'),
            'color'=> $this->input->post('color'),
            'productmrp'=> $this->input->post('productmrp'),
            'sellingprice'=> $this->input->post('sellingprice'),
            'qunty'=> $this->input->post('qunty'),
            'setstatus'=> $this->input->post('setstatus'), 
         );
         $pid = $this->input->post('pid');
         $id = $this->input->post('vid');
         if($this->AD->UpdataData($row, $id,'id','variation')){
        redirect('ve/add-var/'.$pid);
         }else{

         }
         // print_r($row);
      }

      function deletedata(){
        $id =   $this->input->post('data-id');
         if($this->AD->DeleteData($this->input->post('data-id'),'id','variation')){
            redirect($_SERVER["HTTP_REFERER"]);
         }
      }

      function deleproduct(){
         $id =   $this->input->post('data-id');
         if($this->AD->DeleteData($this->input->post('data-id'),'id','product')){
            redirect($_SERVER["HTTP_REFERER"]);
         } 
      }


      // image upload code
      function addproimg(){
         $config['upload_path']= './upload/product/';
         $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
         $config['encrypt_name']= true;
         $this->load->library('upload', $config);
         if(isset($_FILES['mainimg']) &&  isset($_FILES['multimge'])){
         if ($this->upload->do_upload('mainimg')){
            $mainimg = $this->upload->data('file_name');
            $ImageCount = count($_FILES['multimge']['name']);
            for($i=0;$i<$ImageCount ;$i++){  
               $_FILES['file']['name']     = $_FILES['multimge']['name'][$i];
               $_FILES['file']['type']     = $_FILES['multimge']['type'][$i];
               $_FILES['file']['tmp_name'] = $_FILES['multimge']['tmp_name'][$i];
               $_FILES['file']['error']    = $_FILES['multimge']['error'][$i];
               $_FILES['file']['size']     = $_FILES['multimge']['size'][$i];
               if($this->upload->do_upload('file')){
                  $imageData[$i] = $this->upload->data('file_name');
              }else{
               $error = $this->upload->display_errors($_FILES['file']['name']);
               break;
              }
            }
            // db send data 
            $multiimg =  implode(",",$imageData);
            $data = array(
               'color' =>  $this->input->post('color'),
               'mainimg'=>$mainimg,
               'multiimg'=> $multiimg,
               'userid'=>  $this->session->userdata('vender-id'),
               'pid'=> $this->input->post('pid')
            );
            $result =  $this->AD->AddData($data,'productimg');
            redirect($_SERVER["HTTP_REFERER"]);
         }

         else
         { 
           $error = $this->upload->display_errors($_FILES['mainimg']['name']);         
         } 
       
      }
        

      }
      
      // image upload deleted
      function DeleteImage(){ 
         $id = $this->input->post('data-id');
         $result = $this->AD->SelectData('id',$id,'productimg')->row();
         $path = $_SERVER['DOCUMENT_ROOT'].'/EcomHub/upload/product/'.$result->mainimg;
         unlink($path);
            $arr =  explode(',',$result->multiimg);
            for($i=0;$i<sizeof($arr);$i++){
               $path = $_SERVER['DOCUMENT_ROOT'].'/EcomHub/upload/product/'.$arr[$i];
               unlink($path);
            }
         if($this->AD->DeleteData($this->input->post('data-id'),'id','productimg')){
            redirect($_SERVER["HTTP_REFERER"]);
         }
      } 



      
 }
?>