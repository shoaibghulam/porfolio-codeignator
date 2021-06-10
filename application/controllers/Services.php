<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
function __construct(){
    parent::__construct();
        $this->load->model('Alldata');
        $this->load->model('Alldatainsert');

}
	public function index()
	{
    $data = array();
    $data['skill']=$this->Alldata->skills();
    $data['services']=$this->Alldata->services();
	 $this->load->view('dashboard/header',$data);
     $this->load->view('dashboard/leftnav');
     $this->load->view('dashboard/servicesbody');
     $this->load->view('dashboard/footer');
        
	}
    public function insert(){
   
        $data = array(
        'title'=>$this->input->post('title'),
        'descr'=>$this->input->post('desc'),
        'icon'=>$this->input->post('icon')
        );
        $this->Alldatainsert->skillservice($data);
    }
    public function servicedelete(){
        $data=$this->input->get('id');
        $this->Alldatainsert->servicedelete($data);
    }
     public function update(){
         $data = array(
        'id'=>$this->input->get('sid'),
        'title'=>$this->input->post('title'),
        'descr'=>$this->input->post('desc'),
        'icon'=>$this->input->post('icon')
        );
       
       $this->Alldatainsert->serviceupdate($data);
    }
}
