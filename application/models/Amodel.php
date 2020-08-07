<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Amodel extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //Do your magic here
    }

    public function getAduan()
    {
        $this->db->select('*');
        $this->db->from('aduan1');
        $query = $this->db->get();
  
        return $query->result();
    }

    public function atotal()
    {
    
      $this->db->select('*');
      $this->db->from('aduan1');
 
      $count = $this->db->get()->num_rows();
      return $count;
      
    }
    

}

/* End of file Amodel.php */
