<?php
namespace App\classes;

class Product{
    public function allProduct(){
        return[
            0=>['id'=>1,'category_id'=>1,'name'=>'T-Shirt','price'=>'450','image'=>'team-1.jpg','description'=>'New T-Shirt'],
            1=>['id'=>2,'category_id'=>2,'name'=>'Sharee','price'=>'750','image'=>'team-2.jpg','description'=>'Sharee'],
            2=>['id'=>3,'category_id'=>3,'name'=>'Baby Product','price'=>'1150','image'=>'team-3.jpg','description'=>'Baby Product'],
            3=>['id'=>4,'category_id'=>4,'name'=>'Sharee','price'=>'2250','image'=>'team-4.jpg','description'=>'Sharee'],
            4=>['id'=>5,'category_id'=>1,'name'=>'Shirt','price'=>'850','image'=>'team-1.jpg','description'=>'T-Shirt'],
            5=>['id'=>6,'category_id'=>2,'name'=>'Sharee','price'=>'1650','image'=>'team-2.jpg','description'=>'Sharee']
        ];
    }
}
?>