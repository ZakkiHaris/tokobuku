<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MBuku extends CI_Model{
    private $table = "buku";
    
    function getBuku(){        
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    function getBukuById($id_buku){
        $this->db->where('id_buku',$id);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    function updateBuku($id_buku,$data){
        $this->db->where('id_buku', $id);
        return $this->db->update($this->table, $data);
    }
    
    function insertBuku($data){
        return $this->db->insert($this->table,$data);
    }
    function deleteBuku($id_buku){
        $this->db->where('id_buku', $id);
        $query = $this->db->delete($this->table);
        if($this->db->affected_rows() == '1'){
            return true;
        }else{
            return false;
        }
    }
}
?>
