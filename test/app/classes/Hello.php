<?php
namespace App\classes;
class Hello{
    public $message,$firstName,$last_name,$x,$y,$z;
public function __construct(){
    $this->message='Hello';
    $this->firstName='Md';
    $this->last_name='Saidul';
    $this->x=10;
    $this->y=20;
}
public function index(){
    echo '<h1>'.$this->message.'</h1>';
    echo $this->firstName.' '.$this->last_name; echo '<br>';

    echo '<br>';
    echo $this->x + $this->y; echo '<br>';
    echo $this->x - $this->y; echo '<br>';
    echo $this->x * $this->y; echo '<br>';
    echo $this->x / $this->y; echo '<br>';
    echo $this->x % $this->y; echo '<br>';
    echo '<br>';
    echo ++$this->x; echo '<br>';
    echo $this->x++; echo '<br>';
    echo $this->x--; echo '<br>';
    echo --$this->x; echo '<br>';
}

}
?>