<?php
require_once('vendor/autoload.php');
use App\classes\Student;
use App\classes\Category;
use App\classes\Product;

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        $page_name=$_GET['page'];

        $student =new Student();
        $students= $student->index();

        $category =new Category();
        $categories= $category->allCategory();

        $product =new Product();
        $products= $product->allProduct();
        
        include('pages/home.php');
    }
}

?>