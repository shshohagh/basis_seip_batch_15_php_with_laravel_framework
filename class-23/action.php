<?php
require_once('vendor/autoload.php');
use App\classes\Category;
use App\classes\Product;
use App\classes\Brand;

if(isset($_GET['page'])){
    $page_name=$_GET['page'];
    $id=$_GET['id'];

    $product =new Product();
    $products= $product->products();

    $category =new Category();
    $categories= $category->categories();

    $brand =new Brand();
    $brands= $brand->brands();

    if($page_name=='Home'){      
        include('pages/home.php');

    }elseif($page_name=='Products'){
        include('pages/products.php');

    }elseif($page_name=='details'){
        $products=$product->details($id);
        include('pages/details.php');

    }elseif($page_name=='Orders'){
        include('pages/order.php');
        
    }elseif($page_name=='Categories'){
        $products=$product->categoryProduct($id);
        $category=$category->categoryName($id);
        $categoryName=$category['name'];
        include('pages/productByCategory.php');

    }elseif($page_name=='Brands'){
        $products=$product->brandProduct($id);
        $brand=$brand->brandName($id);
        $brandName=$brand['name'];
        include('pages/productByBrand.php');

    }elseif($page_name=='Customer'){
        include('pages/customer.php');
        
    }else{
        include('pages/404.php');
    }
}

?>