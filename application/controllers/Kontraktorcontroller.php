<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontraktorcontroller extends CI_Controller {

    public function index()
    {
        $this->load->view('based/header.php');
		$this->load->view('based/nav.php');
		$this->load->view('based/sidebar.php');
		$this->load->view('pages/kontraktor.php');
		$this->load->view('based/footer.php');
		$this->load->view('based/script.php');
    }

}


