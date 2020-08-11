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

    public function getUser()
    {
      $this->db->select('*');
      $this->db->from('jps_users');
      $query = $this->db->get();

      return $query->result();
    }

    public function get_verify($emaiv,$passv)
    {
        $this->db->select('*');
        $this->db->from('jps_users');
        $this->db->where('jps_email', $emaiv);
        $this->db->where('jps_password', $passv);
        $this->db->limit(1);
    
        $get_data = $this->db->get();
    
        if($get_data->num_rows()==1)
        {
          return $get_data->result();
        }
        else
        {
          return false;
        }
    }

    public function isEmail($mail)
    {
      $this->db->where('user_id',$mail);
      $query = $this->db->get('jps_users');
      $output = 'auto generate';
      foreach($query->result() as $row)
      {
        $output .= '<option value="'.$row->jps_email.'">'.$row->jps_email.'</option>';
      }
      return $output;
    }
    

    

}

/* End of file Mainmodel.php */
