<?php

namespace App\classes;
use App\classes\Data;

class Auth
{
public $email,$password,$d=true;
 public function __construct($post=null)
 {
    $this->email=$post['email'];
    $this->password=$post['password'];
 }
public function login(){
     $datas=new Data();
     foreach ($datas->userInfo() as $data){
         if($this->email==$data['email'] && $this->password==$data['password']){
             session_start();
             $_SESSION['user_id']=$data['id'];
             $_SESSION['user_name']=$data['name'];

             header("Location:action.php?page=home");
             $this->d=false;
         }
     }
     if($this->d){
         session_start();
         $_SESSION['message']="Sorry invalid email or password";
         header("Location:action.php?page=login");
     }



}
    public function logout(){
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("Location:action.php?page=login");
    }





}