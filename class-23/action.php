<?php
require_once('vendor/autoload.php');
/**
 * Model
 */
use App\classes\Category;
use App\classes\Product;
use App\classes\Brand;

if(isset($_GET['page'])){
    /**
     * Global veriable
     */
    $page_name=$_GET['page'];
    $id=$_GET['id'];
/**
 * Global 
 */
    $product =new Product();
    $products= $product->products();

    $category =new Category();
    $categories= $category->categories();

    $brand =new Brand();
    $brands= $brand->brands();
/**
 * Route And Controller
 */
    if($page_name=='Home'){ /** Dashboard */   
        $dashboard_products=count($products);   
        $dashboard_brands=count($brands);   
        $dashboard_categories=count($categories);  
        $products=$product->home();
        include('pages/home.php');

    }elseif($page_name=='Products'){
        include('pages/products.php');

    }elseif($page_name=='details'){
        $products=$product->details($id);
        include('pages/details.php');

    }elseif($page_name=='Orders'){
        $products=$product->home();
        include('pages/order.php');
        
    }elseif($page_name=='Categories'){ /** Products By Category */
        $products=$product->categoryProduct($id);
        $category=$category->categoryName($id);
        $categoryName=$category['name'];
        include('pages/productByCategory.php');

    }elseif($page_name=='Brands'){  /** Products By Brand */
        $products=$product->brandProduct($id);
        $brand=$brand->brandName($id);
        $brandName=$brand['name'];
        include('pages/productByBrand.php');

    }elseif($page_name=='Customer'){
        $products=$product->home();
        include('pages/customer.php');
        
    }else{
        include('pages/404.php');
    }
}

?>