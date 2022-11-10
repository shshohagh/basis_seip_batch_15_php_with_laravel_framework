<?php
require_once('vendor/autoload.php');
use App\classes\Student;

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        $page_name=$_GET['page'];

        $student =new Student();
        $students= $student->index();
        
        include('pages/home.php');
    }
}

?>