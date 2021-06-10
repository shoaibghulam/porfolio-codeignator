<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('Alldata');
    $this->load->model('Alldatainsert');
}
	public function index()
	{
     $data = array();
     $data['cv']=$this->Alldata->cv();
     $data['about']= $this->Alldata->profile();
	 $this->load->view('dashboard/header',$data);
     $this->load->view('dashboard/leftnav');
     $this->load->view('dashboard/homebody');
     $this->load->view('dashboard/footer');
        
	}
    public function updateprofile(){
        $config= array(
            'upload_path'=>"./assets/images/banner/",
            'allowed_types'=>"jpg|jpeg|png|gif|PNG|",
            'max_size'=>"8109999",
            'overwrite'=>TRUE
        );
        $this->load->library('upload',$config);
        if($this->upload->do_upload('thumb')){
            $thumb=$this->upload->data();
             
            $data=array(
        'name'=>$this->input->post('name'),
        'profession'=>$this->input->post('profession'),
        'Facebook'=>$this->input->post('Facebook'),
        'Twitter'=>$this->input->post('Twitter'),
        'Instgram'=>$this->input->post('Instgram'),
        'linkedlist'=>$this->input->post('linkedlist'),
        'dob'=>$this->input->post('DOB'),
        'Email'=>$this->input->post('Email'),
        'contact'=>$this->input->post('contact'),
        'address'=>$this->input->post('address'),
        'desc'=>$this->input->post('desc'),
        'map'=>$this->input->post('map'),
        'thumb'=>$thumb['file_name']
        
        );
        $this->Alldatainsert->updateprofile($data);

        }
        else{
                 $data=array(
        'name'=>$this->input->post('name'),
        'profession'=>$this->input->post('profession'),
        'Facebook'=>$this->input->post('Facebook'),
        'Twitter'=>$this->input->post('Twitter'),
        'Instgram'=>$this->input->post('Instgram'),
        'linkedlist'=>$this->input->post('linkedlist'),
        'dob'=>$this->input->post('DOB'),
        'Email'=>$this->input->post('Email'),
        'contact'=>$this->input->post('contact'),
        'address'=>$this->input->post('address'),
        'desc'=>$this->input->post('desc'),
        'map'=>$this->input->post('map'),
        'thumb'=>0
        
        );
        $this->Alldatainsert->updateprofile($data);

        }
       
        
    }
public function cv(){
    $config = array(
    'upload_path'=>"./assets/cv",
    'allowed_types'=>"pdf|docx|doc",
    'max_size'=>"50000000",
    'overwrite'=>TRUE
    );
    $this->load->library('upload',$config);
    if($this->upload->do_upload('cv')){
        $c=$this->upload->data();
        $data= array(
        'cv'=>$c['file_name'],
        'hire'=>$this->input->post('hirelink')
        );
        $this->Alldatainsert->cvinsert($data);
       
    }
    else{
         $data= array(
        'cv'=>'0',
        'hire'=>$this->input->post('hirelink')
        );
         $this->Alldatainsert->cvinsert($data);
       
    }
}
}