<?php
namespace App\classes;

class Brand{

    public function brands(){
        return [
            0 => ['id'=>'1','name'=>'Plus Point'],
            1 => ['id'=>'2','name'=>'Colors'],
            2 => ['id'=>'3','name'=>'Easy'],
        ];
    }
    public function brandName($id){
        $brands= $this->brands();
        foreach($brands as $brand){
            if($brand['id']==$id){
                return $brand;
            }
        }
    }

}
?>