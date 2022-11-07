<?php
namespace App\classes;

class OperatorClass{
    public $x,$y;

    public function __construct(){
        $this->x=10;
        $this->y=20;
        $this->z=30;
        $this->check=false;
    }
    public function title($req){
        $res= '<h1>'.$req.' Operator </h1>';
        return $res;
    }
    public function index(){
        //echo $this->x;
        /**
         * Assignment Operator
         */
        echo $this->title('Assignment');
        echo $this->x += $this->y; echo '<br>'; //30
        echo $this->x -= $this->y; echo '<br>'; //10
        echo $this->x *= $this->y; echo '<br>'; //200
        echo $this->x /= $this->y; echo '<br>'; //10
        echo $this->x %= $this->y; echo '<br>'; //10
        echo $this->x .= $this->y; echo '<br>'; //1020
        /**
         * Conditional Operator
         */
        echo $this->title('Conditional');
        $this->x=10;
        $this->y=20;
        echo $this->x > $this->y; echo '0<br>'; //0
        echo $this->x >= $this->y; echo '0<br>'; //0
        echo $this->x < $this->y; echo '<br>'; //1
        echo $this->x <= $this->y; echo '<br>'; //1
        echo $this->x == $this->y; echo '0<br>'; //0
        echo $this->x === $this->y; echo '0<br>';//0
        echo $this->x != $this->y; echo '<br><br>'; // 1
        /**
         * Veriable
         */
        echo '<h1>x=100; y=200</h1>';
        $this->x=100;
        $this->y=200;
        $this->z=$this->x + $this->y;
        echo 'Z='.$this->z; echo '<br><br>'; // 300
        /**
         * if else
         */
        echo '<h1>if else</h1>';
        if($this->x > $this->y){
            echo $this->x;
        }else{
            echo 'x>y: Hello Bangladesh';
        }
    echo '<br><br>'; // 300
        if($this->x > $this->y){
            echo $this->x;
        }elseif($this->x < $this->y){
            echo 'y='.$this->y;
        }else{
            echo 'Hello Bangladesh';
        }
    echo '<br><br>'; // 300
        $x = $this->x;
        $y = $this->y;
        $z = $this->z;
        if($x<$y){
             echo 'Hello Bangladesh';
        }elseif($x>=$y){
            echo 'Hello BITM';
        }else{
            echo 'Lab 302';
        }
    echo '<br><br>'; // 300
        if($x>$y){
            echo 'Hello Bangladesh';
        }elseif($x<$y){
            echo 'Hello BITM';
        }else{
            echo 'Lab 302';
        }
    echo '<br><br>'; // 300
        if($x==$y){
            echo 'Hello Bangladesh';
        }elseif($x<$y){
            echo 'Hello BITM';
        }else{
            echo 'Lab 302';
        }
        echo '<h1>switch case</h1>';
        switch($x){
            case 100:
                if($y<2000){
                    $discountAmount=$y*10/100;
                    echo 'Payable: '.$y-$discountAmount;
                }
                break;
                case 20:
                    echo '20';
                    break;
                    case 30:
                        echo '30';
                        break;
                        default:
                            echo 'not match';
                            break;
        }
        /**
         * Logical Operator
         */
        echo '<h1>Logical Operator - &&</h1>';
        $this->x=10;
        $this->y=20;
        $this->z=30;
        echo ($this->x < $this->y) && ($this->x > $this->y); echo '0<br>'; // 0
        echo ($this->x > $this->y) && ($this->x > $this->z); echo '0<br>'; // 0
        echo ($this->x < $this->y) && ($this->x < $this->z); echo '<br>'; // 1
        echo ($this->x > $this->z) && ($this->x < $this->z); echo '0<br><br>'; // 0
        echo '<h1>Logical Operator - ||</h1>';
        echo ($this->x < $this->y) || ($this->z > $this->y); echo '<br>'; // 1
        echo ($this->x > $this->z) || ($this->y > $this->x); echo '<br>'; // 1
        echo ($this->z < $this->x) || ($this->x < $this->y); echo '<br>'; // 1
        echo ($this->x > $this->y) || ($this->y > $this->z); echo '0<br><br>'; // 0
        echo '<h1>Logical Operator - !</h1>';
        echo !$this->check; echo '<br>';



       
    }
}
?>