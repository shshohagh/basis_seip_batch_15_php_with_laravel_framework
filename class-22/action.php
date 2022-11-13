<?php
require_once('vendor/autoload.php');
use App\classes\Category;
use App\classes\Product;

if(isset($_GET['page'])){
    $page_name=$_GET['page'];
    $id=$_GET['id'];

    $product =new Product();
    $products= $product->products();

    $category =new Category();
    $categories= $category->categories();

    if($page_name=='Home'){      
        include('pages/home.php');

    }elseif($page_name=='Products'){
        include('pages/products.php');

    }elseif($page_name=='details'){
        $products=$product->details($id);
        include('pages/details.php');

    }elseif($page_name=='Orders'){
        include('pages/order.php');

    }elseif($page_name=='Category'){
        include('pages/categoryProduct.php');

    }elseif($page_name=='ProductByCategory'){
        $products=$product->categoryProduct($id);
        include('pages/productByCategory.php');

    }elseif($page_name=='Customer'){
        include('pages/customer.php');
        
    }else{
        include('pages/404.php');
    }
}

?>