<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alldata extends CI_Model {
public function profile(){
    $query= $this->db->query("SELECT * FROM about");
    return $query->result();
}
public function skills(){
    $query= $this->db->query("SELECT * FROM skills");
    return $query->result();
}
    public function services(){
    $query= $this->db->query("SELECT * FROM services ORDER by sertitle");
    return $query->result();
}
       public function cv(){
    $query= $this->db->query("SELECT * FROM cv");
    return $query->result();
}
          public function work(){
    $query= $this->db->query("SELECT * FROM work");
    return $query->result();
}
    public function dashboardworker(){
        $query=$this->db->query("SELECT * FROM work,services WHERE work.serid=services.serid order by work.wid DESC ");
        return $query->result();
    }
    
    // Setting Data REtrivew
            public function setting(){
    $query= $this->db->query("SELECT * FROM setting");
    return $query->result();
}
    //Users Account
    public function users(){
    $query= $this->db->query("SELECT * FROM users");
    return $query->result();
}
    //User account Login
    public function userlogin($data){
     $sql="SELECT * FROM users where username='$data' or email='$data'";
    $query=$this->db->query($sql);
    return $query->result();
}
    
}
