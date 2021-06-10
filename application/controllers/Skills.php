<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends CI_Controller {
function __construct(){
    parent::__construct();
        $this->load->model('Alldata');
        $this->load->model('Alldatainsert');

}
	public function index()
	{
    $data = array();
    $data['skill']=$this->Alldata->skills();
	 $this->load->view('dashboard/header',$data);
     $this->load->view('dashboard/leftnav');
     $this->load->view('dashboard/skillsbody');
     $this->load->view('dashboard/footer');
        
	}
    public function insert(){
        $data = array(
        'skill'=>$this->input->post('skill'),
        'position'=>$this->input->post('position')
        );
        $this->Alldatainsert->skillinsert($data);
    }
    public function skilldelete(){
        $data=$this->input->get('id');
        $this->Alldatainsert->skilldelete($data);
    }
     public function update(){
        $data = array(
        'id'=>$this->input->post('id'),
        'skill'=>$this->input->post('skill'),
        'position'=>$this->input->post('position')
        );
        $this->Alldatainsert->skillupdate($data);
    }
}
