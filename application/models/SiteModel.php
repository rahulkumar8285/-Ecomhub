<?php 
include('AdminModel.php');
class SiteModel extends AdminModel{

    function GetProduct(){
    $this->db->select('*');
    $this->db->from('product');
    $this->db->join('variation', 'variation.pid = product.id');
    $this->db->join('productimg', 'productimg.pid = product.id');
    $join_query = $this->db->get()->row();
    print_r($join_query);
 }

}