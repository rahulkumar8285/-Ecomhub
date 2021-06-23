<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class operation extends CI_Controller{

    public function __construct()
	{
	  parent::__construct();
	//   $this->menu = new  SiteMenu;
        $this->load->library('table');
	    $this->load->model('AdminModel','AM');
		
	}

    public function AddCategory(){
        $data = array(
        'name' => $this->input->post('cname')
        );
        $result = $this->AM->AddData($data,'category');
        if($result){
            echo 1;
        }
    }

    public function ShowCategory(){
        //set tabel//
        // $this->table->set_heading('id', ' Name');
        //   // set template
        //   $style = array('table_open'  => '<table class="table table-striped table-hover">');
        //   $this->table->set_template($style);
        //   $result = $this->AM->ShowData('category');
        //   echo $this->table->generate($result);
          $resultList = $this->AM->ShowData('category');
        //   print_r($resultList);
          $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
			$result['data'][] = array(
				$i++,
				$value->name
			);
		}
		// echo json_encode($result);

    }

}