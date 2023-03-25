<?php
class UpdateAboutUs{

    private function updateAbout(){
        global $conn;
        $id = 'aboutUs';
        $aboutUs = $_POST['aboutUs'];
        if($_POST["image"] == null) {$image = 'Mohammed.jpg';}
        else{$image = $_POST['image'];}
        $sql = "UPDATE windowstore.aboutus SET TextP = '{$aboutUs}', Image = '{$image}'  WHERE idaboutUs ='{$id}'";
    
        if (mysqli_query($conn, $sql)) {
            header("Location: /webProject/mvc/public/aaboutUs/adminAboutUs");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    public function __construct() {
        $this->updateAbout();
    }
}