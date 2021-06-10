<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alldatainsert extends CI_Model {
public function updateprofile($data){
   if($data['thumb']==0){
        $sql="UPDATE about SET name=? , profession=?, fb=?, twitter=?, 	instgram=?, linkedlist=?, description=?, dob=?, email=?, contact=?, location=?, map=? where id=1";
    $this->db->query($sql,array($data['name'],$data['profession'],$data['Facebook'],$data['Twitter'],$data['Instgram'],$data['linkedlist'],$data['desc'],$data['dob'],$data['Email'],$data['contact'],$data['address'],$data['map']));
    
   }else{
            $sql="UPDATE about SET name=? , profession=?, profile=?, fb=?, twitter=?, 	instgram=?, linkedlist=?, description=?, dob=?, email=?, contact=?, location=?, map=? where id=1";
    $this->db->query($sql,array($data['name'],$data['profession'],$data['thumb'],$data['Facebook'],$data['Twitter'],$data['Instgram'],$data['linkedlist'],$data['desc'],$data['dob'],$data['Email'],$data['contact'],$data['address'],$data['map']));
   
   }
      
    redirect('Dashboard');
}
    public function skillinsert($data){
        $sql="INSERT INTO skills(stitle,sposition) VALUES(?,?)";
        $this->db->query($sql,array($data['skill'],$data['position']));
        redirect('Skills');
    }
    
    
     public function skilldelete($data){
        $sql="DELETE FROM skills WHERE sid=?";
        $this->db->query($sql,$data);
        redirect('Skills');
    }
    
    public function skillupdate($data){
        $sql="UPDATE skills SET stitle=?, sposition=? WHERE sid=?";
        $this->db->query($sql,array($data['skill'],$data['position'], $data['id']));
        redirect('Skills');
    }
    public function cvinsert($data){
        if($data['cv']=='0'){
            
        $sql="UPDATE cv SET hirelink=? where cvid=1";
        $this->db->query($sql,array($data['hire']));
          
        }
        else{
            
        $sql="UPDATE cv SET cvfile=?, hirelink=? WHERE cvid=1";
        $this->db->query($sql,array($data['cv'],$data['hire']));
          
        }
      redirect('Dashboard');
    }

    // Services Insert
 
   public function skillservice($data){
        $sql="INSERT INTO services(sertitle,serdesc,sericon) VALUES(?,?,?)";
        $this->db->query($sql,array($data['title'],$data['descr'],$data['icon']));
        redirect('Services');
       
    }
    // Services Update
  public function serviceupdate($data){
        $sql="UPDATE services SET sertitle=?, serdesc=?, sericon=? WHERE serid=?";
        $this->db->query($sql,array($data['title'],$data['descr'], $data['icon'], $data['id']));
        redirect('Services');
    }
    // Service Delete
     public function servicedelete($data){
        $sql="DELETE FROM services WHERE serid=?";
        $this->db->query($sql,$data);
        redirect('Services');
    }
 
    // Work project insert
    public function workinsert($data){
        $sql="INSERT INTO work(wtitle,wlink,wthumb,serid) VALUES(?,?,?,?)";
        $this->db->query($sql,array($data['title'],$data['link'],$data['thumb'],$data['serid']));
        redirect('Works');
        print_r($data);
       
    }
   
    public function workupdate($data){
        if($data['thumb']==null){
        $query="UPDATE work SET wtitle=?, wlink=? , serid=? where wid=?";
        $this->db->query($query,array($data['title'],$data['link'],$data['service'], $data['wid']));
            print_r($data);
              
        }
        else{
            
        $query="UPDATE work SET wtitle=?, wlink=? , serid=? , wthumb=? where wid=?";
        $this->db->query($query,array($data['title'],$data['link'],$data['service'],$data['thumb'], $data['wid']));
      
        }
        redirect('Works');
    }
    
     // Work  Delete
     public function workdelete($data){
        $sql="DELETE FROM work WHERE wid=?";
        $this->db->query($sql,$data);
        redirect('Works');
    }
    // Update Website Setting
//title
//desc
//logo
//favicon
 
    public function settingupdate($data){
          if($data['logo']==null && $data['favicon']==null){
             $sql="UPDATE setting SET stitle=? ,description=? where sid=1";
         $this->db->query($sql,array($data['title'],$data['desc']));
          
        }
    else if($data['logo']==null){
         $sql="UPDATE setting SET stitle=? , sfavicon=?, description=? where sid=1";
         $this->db->query($sql,array($data['title'],$data['favicon'],$data['desc']));
         
     }
        else if($data['favicon']==null){
             $sql="UPDATE setting SET stitle=? , slogo=? , description=? where sid=1";
         $this->db->query($sql,array($data['title'],$data['logo'],$data['desc']));
           
        }
       
        else{
             $sql="UPDATE setting SET stitle=? , sfavicon=? , slogo=? , description=? where sid=1";
         $this->db->query($sql,array($data['title'],$data['favicon'],$data['logo'],$data['desc']));
            
        }
        redirect('Setting');
    }
  
    public function useraccount($data){
       // $sql="INSERT INTO users(username,email,password) VALUES(?,?,?)";
        $sql="UPDATE users SET username=?, email=?, password=? WHERE uid=1";
        $this->db->query($sql,array($data['username'],$data['email'],$data['password']));
        redirect('Setting');
    }
}