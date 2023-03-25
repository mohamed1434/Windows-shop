<?php

class DeleteOneProduct {

    private function deleteProduct($id){
        global $conn ;
        $query = " DELETE FROM windowstore.products WHERE idProducts ='{$id}'";
        if (mysqli_query($conn, $query)) {
        header("Location: /webProject/mvc/public/pproducts/adminProducts");
        } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    public function __construct($id) {
        echo $id;
        $this->deleteProduct($id);
    }
}