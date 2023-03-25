<?php
class UpdateContactUs{

    private function updateAbout(){
        global $conn;
        $id = 'contactUs';
        $contactUs = $_POST['contactUs'];
        //$image = $_POST['image'];
        // if($_POST["image"] == null) $image = $image;  
        if($_POST["image"] == null) {$image = 'Mohammed.jpg';}
        else{$image = $_POST['image'];}
        $sql = "UPDATE windowstore.aboutus SET TextP = '{$contactUs}', Image = '{$image}'  WHERE idaboutUs ='{$id}'";
    
        if (mysqli_query($conn, $sql)) {
            header("Location: /webProject/mvc/public/ccontactUs/adminContactUs");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    public function __construct() {
        $this->updateAbout();
    }
}