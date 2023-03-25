<?php
class hhome extends Controller{
    public function index(){
        $this->view('/index');
    }

    public function adminPage (){
        $this->checkUser();
        $this->view('/adminPage');      
      }

      public function checkUser(){
        if (!isset($_SESSION['auth'])) header("Location: /webProject/mvc/public/hhome");
        if($_SESSION['role'] != 'admin') header("Location: /webProject/mvc/public/hhome");
      }
}