<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontraktorcontroller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Kmodel');
	}
	
    public function index()
    {
		$data['get_kontraktor']=$this->Kmodel->getKontraktor();
		$data['get_count']=$this->Kmodel->ktotal();

		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/kontraktor.php',$data);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
	}

	public function kdetail($id="")
	{
		$data['kdetail']=$this->Kmodel->getKontraktorId($id);


		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/kontraktor_detail.php',$data);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
	}

	public function kform($id="")
	{
		$data['kdetail']=$this->Kmodel->getKontraktorId($id);	
		
		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/kontraktor_detail.php',$data);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
	}


  

}


