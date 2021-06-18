<?php 

class AdminModel extends CI_Model {

    public function SelectData($slfild,$sldata,$tabelname){
        $this->db->where($slfild, $sldata);
        $query = $this->db->get($tabelname);
        return $query;
        
    }

   
}

