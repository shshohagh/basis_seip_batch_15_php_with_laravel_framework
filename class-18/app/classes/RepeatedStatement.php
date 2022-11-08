<?php


namespace App\classes;


use mysql_xdevapi\Statement;
use function Sodium\increment;

class RepeatedStatement
{
    public $x, $y, $a, $b, $xx, $yy, $aa, $bb, $arr1, $arr2, $item, $key;
    public function __construct()
    {
        $this->x = 0;
        $this->y = 20;
        $this->a = 0;
        $this->b = 20;
        $this->xx = 20;
        $this->yy = 0;
        $this->aa = 0;
        $this->bb = 20;
        $this->arr1 = array("a", "b", "c");
        $this->arr2 = [
            [
                "id" => 1,
                "name" => "Saidul Shohag"
            ],
            [
                "id" => 2,
                "name" => "Mostafa Asif"
            ],
            [
                "id" => 3,
                "name" => "Me zubaer"
            ]
        ];

    }
    public function index(){
        echo "<h2> Repeated Statement </h2>";
        echo "<hr>";

        echo "<h3> for statement : </h3>"; // work anti clock-wise
//        for (initialization; condition; increment/decrement){
//            statement...
//        }
        for($this->x = 10; $this->x < $this->y; $this->x ++) {
            if($this->x % 2 == 0){
                echo $this->x." even", "<br>";

            } else  {
                echo $this->x." odd", "<br>";
            }

        }
        echo "<h3> while statement : </h3>"; // work clock-wise
//        while (condition) {
//            Statement...
//            increment/decrement
//        }
        while ($this->a <= $this->b ) {
            echo $this->a, "<br>";
            $this->a ++;
        }

        echo "<h3> do while statement : </h3>";

//        do{
//            statement...
//            increment/decrement;
//
//        } while (condition);
        do{
            echo $this->xx, "<br>";
            $this->xx --;

        } while ($this->xx >= $this->yy);

        echo "<h3> ForEach statement : </h3>";

        print_r($this->arr1);      //without <pre>
        echo "<br>";

        echo "<br> pre tag and print_r function applied: </br>";
        echo "<pre>";                      //with <pre>; <pre> used to structure the array.
        print_r($this->arr1);              //print_r function return only key and value

        echo "<br>pre tag and var_dump function applied: </br>";

        echo "<pre>";
        var_dump($this->arr1);            //var_dump function return array length too.

        echo "<br>for each applied on arr2 </br>";
        echo "<br>";

        foreach ($this->arr2 as $this->key => $this->item) {
            echo "Index:".$this->key." --- "."Id: ".$this->item['id']." --- "."name: ".$this->item['name'], "<br>";
        }




    }
}