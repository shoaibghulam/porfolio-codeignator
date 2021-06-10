<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminloginbo extends CI_Controller {
function __construct(){
    parent::__construct();
     $this->load->model('Alldata');
        $this->load->model('Alldatainsert');
    $this->load->library('form_validation','form');
     $this->load->library('encrypt');   
     $this->load->library('encryption');   

}
	public function index()
	{
        $this->load->view('dashboard/login');
        
	}
    // user account login
    public function login(){
        $user=$this->input->post('user');
        $pass=$this->input->post('password');
      
        $data=$this->Alldata->userlogin($user);
        foreach($data as $user){}
         $password=$this->encryption->decrypt($user->password);
        $pass_decode=$this->encrypt->decode($password);
        if(password_verify($pass,$pass_decode)){
          $sesions=array(
          'userid'=>$user->uid,
          'user'=>$user->username,
          );
          $this->session->set_userdata($sesions);
            redirect('Dashboard');
            
        }
        else{
           $this->session->set_flashdata('Error','Invaild Username and Password');
                redirect("Adminloginbo");
        }
    }
    public function logout(){
        session_destroy();
        redirect('Adminloginbo');
    }
}