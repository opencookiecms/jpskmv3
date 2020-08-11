<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Amodel extends CI_Model 
{

    
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

    public function aduancreatev1()
    {
        $data = array(
            'pengadu' => $this->input->post('pengadu'),
            'nokp' => $this->input->post('nokp'),
            'emailpengadu' => $this->input->post('emailpengadu'),
            'alamat' => $this->input->post('alamat'),
            'notel' => $this->input->post('notel'),
            'aduantxt' => $this->input->post('aduantxt'),
            'tarikhaduan' => $this->input->post('tarikhaduan'),
            'tarikhsurat' => $this->input->post('tarikhsurat'),
            'jawatanpengadu' => $this->input->post('jawatanpengadu'),
            'salinanaduan' => $this->input->post('salinanaduan'),
            'sumber' => $this->input->post('sumber'),
            'lokasi' => $this->input->post('lokasi'),
            'mukim' => $this->input->post('mukim'),
            'sungai' => $this->input->post('sungai'),
            'daerah' => $this->input->post('daerah'),
            'kodaduan' => $this->input->post('kodaduan'),
            'pegawai' => $this->input->post('pegawai'),
            'tarikhmaju' => $this->input->post('tarikhmaju')
        );

        return $this->db->insert('aduan1', $data);
    }
    

}

/* End of file Amodel.php */
