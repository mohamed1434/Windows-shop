<?php
class ccontactUs extends Controller{
    public function index (){
        $contactUs = $this->model('GetContactUs');
        $image = $this->model('GetContactUs');
        $this->view('/contact',['contactUs'=> $contactUs->contactUs,'image' => $image->image]);
      }

      public function adminContactUs (){
        $this->checkUser();
        $contactUs = $this->model('GetContactUs');
        $image = $this->model('GetContactUs');
        $this->view('/adminContactUs',['contactUs'=> $contactUs->contactUs,'image' => $image->image]);
      }

      public function update_contactUs (){
        $this->checkUser();
        $this->model('UpdateContactUs') ;
        $this->view('/adminContactUs');
      }

      public function checkUser(){
        if (!isset($_SESSION['auth'])) header("Location: /webProject/mvc/public/hhome");
        if($_SESSION['role'] != 'admin') header("Location: /webProject/mvc/public/hhome");
      }
}