<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aduancontroller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Amodel');
		$this->load->model('Mainmodel');
        //Do your magic here
    }
    

    public function index()
    {

        $data = array(
           'get_aduan'=> $this->Amodel->getAduan(),
           'get_count'=> $this->Amodel->atotal()
        );
      

		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/aduan.php',$data);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
    }

    public function addAduan1()
    {
        $this->form_validation->set_rules('pengadu','Nama Pengadu','required');

        $data = array(

            'getuser' => $this->Mainmodel->getUser()

        );

        if($this->form_validation->run() === FALSE)
        {
            
            $this->load->view('based/header.php');
            $this->load->view('based/appheader.php');
            $this->load->view('based/nav.php');
            $this->load->view('pages/aduan_form_satu',$data);
            $this->load->view('based/footer.php');
            $this->load->view('based/end.php');
        }
        else
        {
            $this->Amodel->aduancreatev1($data);
			redirect(base_url('aduan')); 
        }

    }

    public function addAduan2($idm="")
    {
        $ses = 12;
        $this->form_validation->set_rules('ppengesyor','Pengesyor','required');

        $data = array(
            'aduan'=> $this->Amodel->getAduanSiasat($idm, $ses)
        );

       
       if ($this->form_validation->run() === FALSE) {

            $this->load->view('based/header.php');
            $this->load->view('based/appheader.php');
            $this->load->view('based/nav.php');
            $this->load->view('pages/aduan_form_dua',$data);
            $this->load->view('based/footer.php');
            $this->load->view('based/end.php');

       } else {

            $this->Amodel->aduancreatev2($data);
            redirect(base_url('aduan')); 
       }
       


    }

    public function addAduan3($idm="")
    {
        $ses = 12;
        $this->form_validation->set_rules('ulasasan','Sila beri sedikit ulasan','required');

        $data = array(
            'aduan'=> $this->Amodel->getAduanSiasat($idm, $ses)
        );

       
       if ($this->form_validation->run() === FALSE) {

            $this->load->view('based/header.php');
            $this->load->view('based/appheader.php');
            $this->load->view('based/nav.php');
            $this->load->view('pages/aduan_form_tiga',$data);
            $this->load->view('based/footer.php');
            $this->load->view('based/end.php');

       } else {

            $this->Amodel->aduancreatev3($data);
            redirect(base_url('aduan')); 
       }
       
    }


}

/* End of file Aduancontroller.php */
