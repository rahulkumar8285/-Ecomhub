<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/ve/vendormenu.php");
class vendorsite extends vendormenu{
 
   public $query = array();
   

   public function __construct()
	{
      parent::__construct();
      if($this->session->userdata('vender-id') == Null){
				redirect('ve/vendorsite');
			}
      $this->query['cat'] = $this->AD->ShowData('category','DESC','id');
      $this->query['size'] = $this->AD->ShowData('size','ASC','orderby');
      $this->query['color'] = $this->AD->ShowData('color','ASC','id');
      $this->load->model('AdminModel','AD');
      vendormenu::menu();
   }

    public function index(){
       $this->load->view('ve/venderdhas');
      $this->load->view('ve/footer');
    }
    public function addprodect(){
      $this->load->view('ve/addprodect',$this->query);
      $this->load->view('ve/footer');
    }

    public function ProdectList(){
      $query['data'] = $this->AD->SelectData('userid',$this->session->userdata('vender-id'),'product');
      $this->load->view('ve/productlist',$query);
      $this->load->view('ve/footer');
    }

    public function addvar($id){
      $this->query['pid'] = $id;
      $this->query['data'] =  $this->AD->SelectData('pid',$id,'variation');
      $this->load->view('ve/product-variation',$this->query);
      $this->load->view('ve/footer');
    }

    function addimg($id){
      $this->query['pid'] = $id;  
      $this->query['data'] = $this->AD->SelectData('pid',$id,'productimg');
      $this->load->view('ve/addimg', $this->query);
      $this->load->view('ve/footer');
    }

    function editvar($id){
      $this->query['data'] =  $this->AD->SelectData('id',$id,'variation');
      //  print_r($query);
      $this->load->view('ve/editvar',$this->query);
      $this->load->view('ve/footer'); 
    }

    function updateImg($id){
      $this->query['data'] =  $this->AD->SelectData('id',$id,'productimg')->row();
      $this->load->view('ve/editimg',$this->query);
      $this->load->view('ve/footer'); 
    }


  
  }
 ?>