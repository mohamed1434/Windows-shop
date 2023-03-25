<?php
class aaboutUs extends Controller{
    public function index (){
        $aboutUs = $this->model('GetAboutUs');
        $image = $this->model('GetAboutUs');
        $this->view('/aboutUs' ,['aboutUs' => $aboutUs->aboutUs,'image' => $image->image]);
      }

      public function adminAboutUs (){
        $this->checkUser();
        $aboutUs = $this->model('GetAboutUs');    
        $image = $this->model('GetAboutUs'); 
        $this->view('/adminAboutUs',['aboutUs' => $aboutUs->aboutUs,'image' => $image->image]);
      }

      public function update_AboutUs (){
        $this->checkUser();
        $this->model('UpdateAboutUs') ;
        $this->view('/about_us_admin');
      }

      public function checkUser(){
        if (!isset($_SESSION['auth'])) header("Location: /webProject/mvc/public/hhome");
        if($_SESSION['role'] != 'admin') header("Location: /webProject/mvc/public/hhome");
      }
}