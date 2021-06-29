<?php 

class AdminModel extends CI_Model {

    public function SelectData($Slfild,$Sldata,$tabelname){
        $this->db->where($Slfild, $Sldata);
        $query = $this->db->get($tabelname);
        return $query;
    }

    public function AddData($data,$tabel){
        $this->db->insert($tabel, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }


    public function ShowData($tabelname,$order,$filed){
         $this->db->order_by($filed,$order);
        return $this->db->get($tabelname);        
    }
   
}