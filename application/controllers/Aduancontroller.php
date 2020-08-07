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
        $data = array(
            'formv' => 'v1',
        );

        $this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
        $this->load->view('pages/aduan_form',$data);
        $this->load->view('based/footer.php');
		$this->load->view('based/end.php');
    }

    public function addAduan2()
    {
        $data = array(
            'formv' => 'v2',
        );

        $this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
        $this->load->view('pages/aduan_form',$data);
        $this->load->view('based/footer.php');
		$this->load->view('based/end.php');
    }

    public function addAduan3()
    {

    }


}

/* End of file Aduancontroller.php */
