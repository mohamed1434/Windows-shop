<?php
class GetContactUs{
public $contactUs;
public $image;

private function getContactUs(){
    $id = 'contactUs';

    global $conn;
    $query = " SELECT * FROM windowstore.aboutus  WHERE idaboutUs ='{$id}'";
        $response = @mysqli_query($conn, $query);
        if ($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                $this->contactUs = $row['TextP'];
                $this->image = $row['Image'];
            }
        } else {
            echo ("CANN'T GET DATA FROM SQL SERVER");
            echo mysqli_error(($conn));
        }
}
    public function __construct() {
    	$this->getContactUs();
    }
}