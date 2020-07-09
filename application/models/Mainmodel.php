<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model {


    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getOrangPenting()
    {
        $this->db->select('*');
        $this->db->from('orangpenting');
        $query = $this->db->get();

        return $query->result();
    }
    

    

}

/* End of file Mainmodel.php */
