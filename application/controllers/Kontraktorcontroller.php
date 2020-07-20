<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontraktorcontroller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Kmodel');
		$this->load->model('Mainmodel');

		$this->load->library('Html2Pdf');
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
			$this->load->view('pages/kontraktor_form_insert.php',$context);
			$this->load->view('based/footer.php');
			$this->load->view('based/end.php');

		}else{

			$config['upload_path'] ='./assets/userimage/';
      		$config['allowed_types'] = 'gif|jpg|jpeg|png';
      		$config['max_size'] = '10000';
      		$config['max_width'] = '30000';
			$config['max_height'] = '30000';
			  
      		$this->load->library('upload', $config);

			if(!$this->upload->do_upload('file')){

				$data = 'default.jpg';
				$this->Kmodel->kaddProcess($data);
				//redirect(base_url()."mrk/successmsg"./$lass); //redirect last id to another step
				$this->session->set_flashdata('success','Action Completed');
				redirect(base_url('kontraktor')); //redirect last id to another step

			}else{
				$dataupload = $this->upload->data();
				$data = $dataupload['file_name'];

				$this->Kmodel->kaddProcess($data);

				$this->session->set_flashdata('success','Action Completed');
				redirect(base_url('kontraktor')); //redirect last id to another step
			}
		}
	}

	public function kupdate($id='')
	{
		$context = array(
			'kdetail'=> $this->Kmodel->getKontraktorId($id),
		);

		$this->form_validation->set_rules('konnama','Kontraktor','required');
		$id = $this->input->post('hiddenid');
		$hpic = $this->input->post('hiddenpic');
		if($this->form_validation->run() == FALSE){

			$this->load->view('based/header.php');
			$this->load->view('based/appheader.php');
			$this->load->view('based/nav.php');
			$this->load->view('pages/kontraktor_form_update.php',$context);
			$this->load->view('based/footer.php');
			$this->load->view('based/end.php');

		}else{

			$config['upload_path'] ='./assets/userimage/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '10000';
			$config['max_width'] = '30000';
			$config['max_height'] = '30000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('file')){
							
				$this->Kmodel->kupdateProcess($hpic, $context, $id);
				redirect(base_url('kontraktor-update/'.$id)); //redirect last id to another step

			}else{
				$dataupload = $this->upload->data();
				$data = $dataupload['file_name'];

				$this->Kmodel->kupdateProcess($data, $context, $id);
				redirect(base_url('kontraktor-update/'.$id)); //redirect last id to another step
			}
			 
		}
		
	}

	public function mkontraktor()
	{
		$context = array(
			'getfilter' => $this->Kmodel->searchKontraktor()
		);

		$this->load->view('based/header.php');
		$this->load->view('based/appheader.php');
		$this->load->view('based/nav.php');
		$this->load->view('pages/maklumat_kontraktor.php',$context);
		$this->load->view('based/footer.php');
		$this->load->view('based/end.php');
	}

	public function cetakkontrakotor($id="")
	{
		$context = array(
			'kdetail'=> $this->Kmodel->getKontraktorId($id),
			'sijilsah' => $this->Kmodel->getSijilSah(),
		);

		$this->load->view('print/kontraktor-cetak.php',$context);
	}


  

}


