<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('alldata');
}
	public function index()
	{
        $data =array();
        //$data['setting']=$this->Alldata->setting();
        $data['data']=$this->alldata->profile();
        $data['skills']=$this->alldata->skills();
        $data['services']=$this->alldata->services();
        $data['cv']=$this->alldata->cv();
        $data['work']=$this->alldata->work();
        $data['setting']=$this->alldata->setting();
		$this->load->view('public/header',$data);
		$this->load->view('public/index');
		$this->load->view('public/work');
		$this->load->view('public/contact');
		$this->load->view('public/footer');
	}
}
