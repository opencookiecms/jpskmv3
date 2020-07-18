<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontraktorcontroller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kmodel');
		$this->load->model('Mainmodel');
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
		$context = array(
			'kdetail'=> $this->Kmodel->getKontraktorId($id)
		);
		
		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/kontraktor_detail.php',$context);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
	}

	public function kadd()
	{	
		$context = array(
			'jpsofficer' => $this->Mainmodel->getOrangPenting(),
		);

		$this->form_validation->set_rules('konnama','Kontraktor','required');

	    if($this->form_validation->run() === FALSE){
			
			$this->load->view('based/header.php');
			$this->load->view('based/appheader.php');
			$this->load->view('based/nav.php');
			$this->load->view('pages/kontraktor_form.php',$context);
			$this->load->view('based/footer.php');
			$this->load->view('based/end.php');

		}else{

			$this->Kmodel->kaddProcess();
			//redirect(base_url()."mrk/successmsg"./$lass); //redirect last id to another step
			redirect(base_url('kontraktor')); //redirect last id to another step

		}

	
	}

	public function kupdate()
	{

	}


  

}


