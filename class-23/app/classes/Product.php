<?php
namespace App\classes;
use App\classes\Category;
use App\classes\Brand;

class Product{
    public $res=[];
    public function products(){
        return[
            0=>['id'=>1,'categoryId'=>1,'brandId'=>1, 'name'=>'Round Neck Sweater | 90s','price'=>'700','image'=>'1.webp','description'=>'Round Neck Sweater | 90s'],
            1=>['id'=>2,'categoryId'=>1,'brandId'=>2, 'name'=>'Premium Sweater | Eminem','price'=>'700','image'=>'2.webp','description'=>'Premium Sweater | Eminem'],
            2=>['id'=>3,'categoryId'=>1,'brandId'=>3, 'name'=>'Premium Sweater | CR7','price'=>'700','image'=>'3.webp','description'=>'Premium Sweater | CR7'],
            3=>['id'=>4,'categoryId'=>1,'brandId'=>1, 'name'=>'Premium Sweater | Tho','price'=>'700','image'=>'4.webp','description'=>'Premium Sweater | Tho'],
            4=>['id'=>5,'categoryId'=>2,'brandId'=>2, 'name'=>'Pocket Hoodie | Sunmoon','price'=>'1000','image'=>'h1.webp','description'=>'Pocket Hoodie: 90s'],
            5=>['id'=>6,'categoryId'=>2,'brandId'=>3, 'name'=>'Pocket Hoodie | Life','price'=>'1000','image'=>'h2.webp','description'=>'Pocket Hoodie | Gray'],
            6=>['id'=>7,'categoryId'=>2,'brandId'=>1, 'name'=>'Pocket Hoodie | CR7','price'=>'1000','image'=>'h3.webp','description'=>'Pocket Hoodie | CR7'],
            7=>['id'=>8,'categoryId'=>2,'brandId'=>2, 'name'=>'Pocket Hoodie | Life','price'=>'1000','image'=>'h4.webp','description'=>'Pocket Hoodie | Red'],
            8=>['id'=>9,'categoryId'=>2,'brandId'=>1, 'name'=>'Pocket Hoodie | Life','price'=>'1000','image'=>'h5.webp','description'=>'Pocket Hoodie | Red'],
           9=>['id'=>10,'categoryId'=>3,'brandId'=>3, 'name'=>'Mens Drop | Life','price'=>'550','image'=>'d1.webp','description'=>'Mens Drop | Red'],
          10=>['id'=>11,'categoryId'=>3,'brandId'=>1, 'name'=>'Mens Drop | Life','price'=>'550','image'=>'d2.webp','description'=>'Mens Drop | Red'],
          11=>['id'=>12,'categoryId'=>3,'brandId'=>2, 'name'=>'Mens Drop | Life','price'=>'550','image'=>'d3.webp','description'=>'Mens Drop | Red'],
          12=>['id'=>13,'categoryId'=>3,'brandId'=>3, 'name'=>'Mens Drop | Life','price'=>'550','image'=>'d4.webp','description'=>'Mens Drop | Red'],
          13=>['id'=>14,'categoryId'=>3,'brandId'=>1, 'name'=>'Mens Drop | Life','price'=>'550','image'=>'d5.webp','description'=>'Mens Drop | Red'],
        ];
    }
    public function details($id){
        $products= $this->products();
        foreach($products as $product){
            if($product['id']==$id){
                $categories=new Category();          
                $categoryName=$categories->categoryName($product['categoryId']);
                $product['categoryName']=$categoryName['name'];
                $brands=new Brand();
                $brandName=$brands->brandName($product['brandId']);
                $product['brandName']=$brandName['name'];
                return $product;
            }
        }
    }
    public function categoryProduct($id){
        $products= $this->products();
        foreach($products as $product){
            if($product['categoryId']==$id){
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }
    public function brandProduct($id){
        $products= $this->products();
        foreach($products as $product){
            if($product['brandId']==$id){
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }

}
?>