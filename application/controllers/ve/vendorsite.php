<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/ve/vendormenu.php");
class vendorsite extends vendormenu{

   public function __construct()
	{
      parent::__construct();
      if($this->session->userdata('vender-id') == Null){
				redirect('ve/vendorsite');
			}
      $this->load->model('AdminModel','AD');
      vendormenu::menu();
   }

    public function index(){
       $this->load->view('ve/venderdhas');
       $this->load->view('ve/footer');
    }
    public function addprodect(){
      $query['data'] = $this->AD->ShowData('category','DESC','id');
      $query['size'] = $this->AD->ShowData('size','ASC','orderby');
      $query['color'] = $this->AD->ShowData('color','ASC','id');
      $this->load->view('ve/addprodect',$query);
      $this->load->view('ve/footer');
    }

    public function ProdectList(){
      $query['data'] = $this->AD->SelectData('userid',$this->session->userdata('vender-id'),'product');
      $this->load->view('ve/productlist',$query);
      $this->load->view('ve/footer');
    }

    public function addvar($id){
      $query['pid'] = $id;
      $query['size'] = $this->AD->ShowData('size','ASC','orderby');
      $query['color'] = $this->AD->ShowData('color','ASC','id');
      $query['data'] =  $this->AD->SelectData('pid',$id,'variation');
      $this->load->view('ve/product-variation',$query);
      $this->load->view('ve/footer');
    }

    function addimg(){
      $query['data'] = $this->AD->SelectData('userid',$this->session->userdata('vender-id'),'product');
      $this->load->view('ve/addimg', $query);
      $this->load->view('ve/footer');
    }
  


  } 
 ?>