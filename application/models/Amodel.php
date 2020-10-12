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
        $this->db->join('aduan2','bid = aid','left');
        $query = $this->db->get();
  
        return $query->result();
    }

    public function getAduanId($id)
    {
        $this->db->select('*');
        $this->db->from('aduan1');
        $this->db->join('aduan2','bid = aid','left');
        $this->db->where('aid',$id);
        $query = $this->db->get();
  
        return $query->result();
    }

    public function getAduanSiasat($idm, $ses)
    {
        $this->db->select('*');
        $this->db->from('aduan1');
        $this->db->join('aduan2','aduan2.bid = aduan1.aid','left');
        $this->db->join('jps_users','jps_users.user_id = aduan1.pegawai','left');
        $this->db->where('aduan1.aid',$idm);
        $this->db->where('aduan1.pegawai',$ses);
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

    public function aduancreatev2()
    {
        $data = array(

            'tsiasat' =>$this->input->post('tsiasat'),
            'kategoriaduan' =>$this->input->post('kategoriaduan'),
            'lat' =>$this->input->post('lat'),
            'longs' =>$this->input->post('longs'),
            'kepentingan' =>$this->input->post('kepentingan'),
            'tagensi' =>$this->input->post('tagensi'),
            'kesiriusan' =>$this->input->post('kesiriusan'),
            'cadangan' =>$this->input->post('cadangan'),
            'anggaran' =>$this->input->post('anggaran'),
            'ppenyiasat' =>$this->input->post('ppenyiasat'),
            'ppenyemak' =>$this->input->post('ppenyemak'),
            'ppengesyor' =>$this->input->post('ppengesyor'),
            'emailpengesyor' =>$this->input->post('emailpengesyor'),
            'aduan2tarikh' =>$this->input->post('aduan2tarikh'),
            'status' =>$this->input->post('status'),
            'aduan1_id' =>$this->input->post('aduan1_id')
        );

        return $this->db->insert('aduan2',$data);
    }

    public function aduancreatev3()
    {
        
    }
    

}

/* End of file Amodel.php */
