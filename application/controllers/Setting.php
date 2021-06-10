<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
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
    $data = array();
    $data['setting']=$this->Alldata->setting();
    $data['users']=$this->Alldata->users();
	 $this->load->view('dashboard/header',$data);
     $this->load->view('dashboard/leftnav');
     $this->load->view('dashboard/settingbody');
     $this->load->view('dashboard/footer');
        
	}
  
    public function update(){
        $logo=null;
        $favicon=null;
         $config= array(
            'upload_path'=>"./assets/images/",
            'allowed_types'=>"jpg|jpeg|png|gif",
            'max_size'=>"809999",
            'overwrite'=>TRUE
        );
        $this->load->library('upload',$config);
        if($this->upload->do_upload('logo')){
            $data=$this->upload->data();
            $logo=$data['file_name'];
        }
        
            if($this->upload->do_upload('favicon')){
            $data=$this->upload->data();
            $favicon=$data['file_name'];
        }
        
        $data = array(
        'title'=>$this->input->post('title'),
        'desc'=>$this->input->post('desc'),
        'logo'=>$logo,
        'favicon'=>$favicon
        );
        $this->Alldatainsert->settingupdate($data);
      
    }
    public function account(){
        $this->form_validation->set_rules('username','User Name','trim|required|alpha_numeric|min_length[6]|max_length[40]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|alpha_numeric|min_length[6]|max_length[24]');
        $this->form_validation->set_error_delimiters('<div style="font-size:11px;  color:red;">', '</div>');
//password encyrption
        $hash=password_hash($this->input->post('password'),PASSWORD_DEFAULT);        
       $pass=$this->encrypt->encode($hash);
       $pass_hash=$this->encryption->encrypt($pass);
        
        if($this->form_validation->run()){
            $data = array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$pass_hash            
            );
            print_r($data);
         $this->Alldatainsert->useraccount($data);
        }
        else{
      $this->index();
        }
    }
    
    
   
}
