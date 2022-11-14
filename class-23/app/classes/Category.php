<?php
namespace App\classes;

class Category{

    public function categories(){
        return [
            0 => ['id'=>'1','name'=>'Sweater'],
            1 => ['id'=>'2','name'=>'Hoodie'],
            2 => ['id'=>'3','name'=>'Mens Drop'],
        ];
    }
    public function categoryName($id){
        $categories= $this->categories();
        foreach($categories as $category){
            if($category['id']==$id){
                return $category;
            }
        }
    }

}
?>