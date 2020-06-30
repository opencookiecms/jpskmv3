<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmodel extends CI_Model {

   
   public function __construct()
   {
       parent::__construct();
       //Do your magic here
   }

   public function getKontraktor()
   {
        $this->db->select('*');
        $this->db->from('kontraktor');
        $query = $this->db->get();

        return $query->result();
   }

   public function getKontraktorId($id)
   {

        $this->db->select('*');
        $this->db->from('kontraktor');
        $this->db->where('kontraktorId', $id);
        $query = $this->db->get();

        return $query->result();
   }


    

}

/* End of file Kmodel.php */
