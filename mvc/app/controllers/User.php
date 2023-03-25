<?php
class User extends Controller{

    public function index(){
            $this->checkUser();
            $this->view('/login');
        }

    public function isUser (){
        $this->checkUser();
        $this->model('loginCode');
    }

    public function logOut (){
        if (!isset($_SESSION['auth'])) header("Location: /webProject/mvc/public/hhome");
        $this->view('/logout');
    }

    public function signUp (){
            $this->checkUser();
            $this->view('/signUp');
        }

        public function addUser (){
            $this->checkUser();
            $this->model('SignUp');
        }

    public function checkUser(){
        if (isset($_SESSION['auth'])&& $_SESSION['auth_role'] != 'admin') header("Location: /webProject/mvc/public/hhome");
        if (isset($_SESSION['auth'])&& $_SESSION['auth_role'] == 'admin') header("Location: /webProject/mvc/public/hhome/adminPage");
    }
}