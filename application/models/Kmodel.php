<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmodel extends CI_Model {

   
   public function __construct()
   {
       parent::__construct();
       $this->load->helper('url');
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

   public function kaddProcess()
   {
      $context = array(
          'konName' => $this->input->post('konnama'),
          'KonAlamat' => $this->input->post('alamat'),
          'konAlamatExtS' => $this->input->post('alamatjalan'),
          'konAlamatExtD' => $this->input->post('alamatdaerah'),
          'konPoskod'=> $this->input->post('poskod'),
          'konBandar' => $this->input->post('bandar'),
          'konDaerah' => $this->input->post('dearah'),
          'konNegeri' => $this->input->post('negeri'),
          'konTel' => $this->input->post('telefon')
      );

      return $this->db->insert('kontraktor', $context);
   }
        
   public function kupdateProcess()
   {

   }

   public function kdeleteProcess()
   {
        
   }


    

}

/* End of file Kmodel.php */
