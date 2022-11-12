<?php
require_once('vendor/autoload.php');
use App\classes\Student;
use App\classes\Category;
use App\classes\Product;

if(isset($_GET['page'])){
    $page_name=$_GET['page'];

    $category =new Category();
    $categories= $category->allCategory();

    if($page_name=='Home'){      
        $student =new Student();
        $students= $student->index();
        include('pages/home.php');
    }elseif($page_name=='Products'){
        $product =new Product();
        $products= $product->allProduct();
        include('pages/products.php');
    }elseif($page_name=='Category'){
        $product =new Product();
        $products= $product->allProduct();
        include('pages/categoryProduct.php');
    }elseif($page_name=='About'){
        include('pages/about.php');
    }else{
        include('pages/404.php');
    }
}

?>