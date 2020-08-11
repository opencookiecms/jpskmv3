<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mainmodel');
        //Do your magic here
    }
    

    public function index()
    {
        
    }

    public function login()
    {
        $this->load->view('pages/login.php');
    }

    public function verify()
    {
        $emaiv = $this->input->post('email');
        $passv = md5($this->input->post('pass'));

        $veri = $this->Mainmodel->get_verify($emaiv,$passv);
        if($veri)
        {
            foreach ($veri as $row)
            {
                $this->session->set_userdata('userid',$row->user_id);
                $this->session->set_userdata('email',$row->jps_email);
                $this->session->set_userdata('name', $row->jps_name);
                $this->session->set_userdata('userpic',$row->user_pic);
                $this->session->set_userdata('roles',$row->jps_userroles);
                $this->session->set_userdata('jawatan',$row->jps_position);
        
                redirect('');
            }

        }else{
            redirect('login');
        }
    }

    public function emailget()
    {
        $getemail = $this->input->post('user_id');
      
        if($getemail)
        {
            $isemail = $this->Mainmodel->isEmail($getemail);
            echo $isemail;
        }
    }

 

}

/* End of file Maincontroller.php */
