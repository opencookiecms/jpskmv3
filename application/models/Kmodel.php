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

   public function ktotal()
   {
   
     $this->load->helper('url');

     $this->db->select('*');
     $this->db->from('kontraktor');

     $c = $this->db->get()->num_rows();
     return $c;
   }

   public function kdaftartotal()
   {

   }
   public function kxdaftartotal()
   {

   }

   ///Add kontraktor

   public function kadd()
   {

   }

   public function kupdate()
   {

   }

   public function kdelete()
   {
        
   }


    

}

/* End of file Kmodel.php */
