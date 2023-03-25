<?php
class GetAboutUs{
public $aboutUs;
public $image;

private function getAboutUs(){
    $id = 'aboutUs';
    global $conn;
    $query = " SELECT * FROM windowstore.aboutus  WHERE idaboutUs ='{$id}'";
    $response = @mysqli_query($conn, $query);
    if ($response) {
        while ($row = mysqli_fetch_assoc($response)) {
            $this->aboutUs = $row['TextP'];
            $this->image = $row['Image'];
        }
    }
}
  
    public function __construct() {  
    	$this->getAboutUs();
    }
}