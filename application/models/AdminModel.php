<?php 

class AdminModel extends CI_Model {

    public function SelectData($Slfild,$Sldata,$tabelname){
        $this->db->where($Slfild, $Sldata);
        $query = $this->db->get($tabelname);
        return $query;
        
    }

   
}

