<?php	
    class Peoples_model extends CI_Model{
        public function getAllPeoples(){
            $query = $this->db->get('peoples');
            return $query->result_array();
        }
    }


?>