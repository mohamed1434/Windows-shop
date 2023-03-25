<?php
class GetProducts{

    public $products = [];

public function __construct()
{
    $this->GetProducts();
}

    private function GetProducts(){
        global $conn;
        $query = ("SELECT * FROM windowstore.products");
        $response = @mysqli_query($conn, $query);
        if ($response) {
            $i =0;
            while ($row = mysqli_fetch_assoc($response)) {
                $product = new Product();
                $product->id =$row['idProducts'];
                $product->name =$row['Name'] ;
                $product->description =$row['Description'];
                $product->image = $row['Image'];
                $product->price =$row['Price'];
                $this->products[$i]= $product;
                $i++;
            }
        } else {
            echo ("CANN'T GET DATA FROM SQL SERVER");
            echo mysqli_error(($conn));
        }
        mysqli_close($conn);
    }
   
}
