<?php
class SignUp{
    private function addUser(){
    global $conn;
    $userName = $_POST['userName'];
    $passWord = $_POST['pass'];
    $cnfrmPassword = $_POST['confirmPass'];
    $found = false;
    
        $query = " SELECT userName FROM windowstore.users WHERE userName ='{$userName}'";
        $response = @mysqli_query($conn, $query);
        if ($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                $found = true;
            }
        }
        //add new user
        if ($passWord == $cnfrmPassword) {
            if (!$found) {
                $sql = "INSERT INTO windowstore.users (userName , password,role)
                                VALUES ('{$userName}', '{$passWord}','user')";
                if (mysqli_query($conn, $sql)) {
                    header("Location: /webProject/mvc/public/User");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else  echo "<script>alert('username already exist')</script>";
        } else  echo "<script>alert('Paswwords not matching, please enter again')</script>";
    }
    public function __construct()
    {
        $this->addUser();
    }

}
?>