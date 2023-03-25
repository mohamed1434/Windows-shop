<?php
class pproducts extends Controller{
    public function index (){
        $products = $this->model('GetProducts');
        $this->view('/products' ,['products' => $products->products]);
      }

      public function productDetail ($id=''){
        $product = $this->model('GetOneProduct',$id) ;
        $this->view('/productDetail',['product' => $product->product]);
      }

      public function editProduct ($id=''){
        $this->checkUser();
        $product = $this->model('GetOneProduct',$id);    
        $this->view('/editProduct' ,['product' => $product->product]);
      }

      public function adminProducts (){
        $this->checkUser();
        $products = $this->model('GetProducts');
        $this->view('/adminProducts',['products' => $products->products]);      
      }

      public function deleteProduct ($id=''){
        $this->checkUser();
        $this->model('DeleteOneProduct',$id);      
        $this->view('/adminProducts' );
      }

      public function addProduct (){
        $this->checkUser();
        $this->view('/addNewProduct');      
      }

      public function saveNewProduct (){
        $this->checkUser();
        $this->model('AddNewProduct') ;
        $this->view('/adminProducts');
      }

      public function updateProduct ($id='',$image=''){
        $this->checkUser();
        $product =new Product;
        $product->setId($id);
        $product->setImage($image);
        $this->model('UpdateOneProduct',$product);
        $this->view('/adminProducts');
      }

      public function checkUser(){
        if (!isset($_SESSION['auth'])) header("Location: /webProject/mvc/public/hhome");
        if($_SESSION['role'] != 'admin') header("Location: /webProject/mvc/public/hhome");
      }
}