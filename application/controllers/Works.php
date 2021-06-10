<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {
function __construct(){
    parent::__construct();
        $this->load->model('Alldata');
        $this->load->model('Alldatainsert');

}
	public function index()
	{
    $data = array();
    $data['work']=$this->Alldata->dashboardworker();
    $data['services']=$this->Alldata->services();
	 $this->load->view('dashboard/header',$data);
     $this->load->view('dashboard/leftnav');
     $this->load->view('dashboard/worksbody');
     $this->load->view('dashboard/footer');
        
	}
    public function insert(){
           $config= array(
            'upload_path'=>"./assets/images/work/",
            'allowed_types'=>"jpg|jpeg|png|gif",
            'max_size'=>"809999",
            'overwrite'=>TRUE
        );
        $this->load->library('upload',$config);
        if($this->upload->do_upload('thumb')){
          $img= $this->upload->data();
        $data = array(
        'title'=>$this->input->post('title'),
        'link'=>$this->input->post('link'),
        'serid'=>$this->input->post('service'),
        'thumb'=>$img['file_name']
        
        );
         $this->Alldatainsert->workinsert($data);
        }

       
       
       
       
    }
    public function workdelete(){
        $data=$this->input->get('id');
        $this->Alldatainsert->workdelete($data);
    }
     public function update(){
          $config= array(
            'upload_path'=>"./assets/images/work/",
            'allowed_types'=>"jpg|jpeg|png|gif",
            'max_size'=>"809999",
            'overwrite'=>TRUE
        );
        $this->load->library('upload',$config);
        if($this->upload->do_upload('thumb')){
          $img= $this->upload->data();
         $data = array(
        'wid'=>$this->input->post('wid'),
        'title'=>$this->input->post('title'),
        'link'=>$this->input->post('link'),
        'service'=>$this->input->post('service'),
        'thumb'=>$img['file_name'],
        );
            
        }
        else{
             $data = array(
        'wid'=>$this->input->post('wid'),
        'title'=>$this->input->post('title'),
        'link'=>$this->input->post('link'),
        'service'=>$this->input->post('service'),
        'thumb'=>null,
        );
         
        }
       $this->Alldatainsert->workupdate($data);
    }
}
