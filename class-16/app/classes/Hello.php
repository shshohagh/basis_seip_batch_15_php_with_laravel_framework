<?php
namespace App\classes;
class Hello{
    public $message,$firstName,$last_name;
    public function __construct(){
        $this->message ='Hello';
        $this->firstName ='Md';
        $this->last_name ='Saidul';
    }
    public function index(){
        echo $this->message;
        echo '<br>';
        echo $this->firstName.' &nbsp;'.$this->last_name;
    }
    
}
?>