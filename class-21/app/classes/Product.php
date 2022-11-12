<?php
namespace App\classes;

class Product{
    public function allProduct(){
        return[
            0=>['id'=>1,'category_id'=>1,'name'=>'T-Shirt','price'=>'450','image'=>'team-1.jpg','description'=>'New T-Shirt'],
            1=>['id'=>2,'category_id'=>2,'name'=>'Shirt','price'=>'750','image'=>'team-2.jpg','description'=>'T-Shirt'],
            2=>['id'=>3,'category_id'=>3,'name'=>'Shirt','price'=>'750','image'=>'team-3.jpg','description'=>'T-Shirt'],
            3=>['id'=>4,'category_id'=>4,'name'=>'Shirt','price'=>'750','image'=>'team-4.jpg','description'=>'T-Shirt'],
            4=>['id'=>5,'category_id'=>5,'name'=>'Shirt','price'=>'750','image'=>'team-1.jpg','description'=>'T-Shirt'],
            5=>['id'=>6,'category_id'=>2,'name'=>'Shirt','price'=>'750','image'=>'team-2.jpg','description'=>'T-Shirt']
        ];
    }
}
?>