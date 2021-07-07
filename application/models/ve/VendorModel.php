<?php 
class VendorModel extends CI_Model {
 


    public function AddData($data,$tabel){
        $this->db->insert($tabel,$data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
