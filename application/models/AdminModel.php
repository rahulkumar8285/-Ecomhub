<?php 

class AdminModel extends CI_Model {

    public function SelectData($Slfild,$Sldata,$tabelname){
        $this->db->order_by('id','DESC');
        $this->db->where($Slfild, $Sldata);
           // echo $this->db->last_query();
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

    public function DeleteData($id,$filed,$tabel){
        $this->db->where($filed, $id);
        $this->db->delete($tabel);
        if ($this->db->affected_rows() > 0){
          return true;
        }
    }

    public function UpdataData($data,$id,$filed,$tabel){
        $this->db->where($filed, $id);
        $this->db->update($tabel,$data);
        // echo $this->db->last_query();
        if ($this->db->affected_rows() > 0){
            return true;
          }
    }

    
   
}