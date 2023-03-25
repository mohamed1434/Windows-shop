<?php
class LoginCode{

    private function isUser(){
        global $conn ;
        $username = $_POST["userName"];
        $password = $_POST["pass"];
        $roll = '';
        $user_Id = 0;
        $user_name = '';
        $found = false;
        $query = " SELECT * FROM windowstore.users WHERE userName ='{$username}'";
        $response = @mysqli_query($conn, $query);
        if ($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                if ($password == $row['password']) {
                    $roll = $row['role'];
                    $user_Id = $row['idUsers'];
                    $user_name = $row['userName'];
                    $found = true;
                    break;
                }
            }
        }
        if ($found) {
            $_SESSION['auth'] = true;
            $_SESSION['role'] = $roll;
            $_SESSION['auth_user'] = [
                'user_Id' => $user_Id,
                'userName' => $user_name,
                'userRole' => $roll
            ];
            if($roll == 'admin')  header("Location: /webProject/mvc/public/hhome/adminPage");
            else header("Location: /webProject/mvc/public/hhome");
            die();
            
        } else  {
            header("Location: /webProject/mvc/public/User");
        }
    }


    public function __construct() {
        $this->isUser();
    }
}