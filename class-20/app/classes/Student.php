<?php
namespace App\classes;

class Student{
    public $message, $student=[];

    public function  __construct(){
        $this->message='hello array';
        $this->student=[
            0=>[
                'id'=>1,
                'name'=>'rafi1',
                'email'=>'rafi1@gmail.com',
                'phone'=>[
                    'phone-1'=>'017093823081',
                    'phone-2'=>'017093823082'
                ],
            ],
            1=>[
                'id'=>2,
                'name'=>'rafi2',
                'email'=>'rafi2@gmail.com',
                'phone'=>[
                    'phone-1'=>'017093823081',
                    'phone-2'=>'017093823082'
                ],
            ],
            2=>[
                'id'=>3,
                'name'=>'rafi3',
                'email'=>'rafi3@gmail.com',
                'phone'=>[
                    'phone-1'=>'017093823081',
                    'phone-2'=>'017093823082'
                ],
            ],
            3=>[
                'id'=>4,
                'name'=>'rafi4',
                'email'=>'rafi4@gmail.com',
                'phone'=>[
                    'phone-1'=>'017093823081',
                    'phone-2'=>'017093823082'
                ],
            ],
            4=>[
                'id'=>5,
                'name'=>'rafi5',
                'email'=>'rafi5@gmail.com',
                'phone'=>[
                    'phone-1'=>'017093823081',
                    'phone-2'=>'017093823082'
                ],
            ]
        ];
    }
    public function index(){

        echo $this->message; echo '<br><br>';
/*         echo '<pre>';
        print_r($this->student); echo '<br>';
        var_dump($this->student); */

/*         foreach($this->student as $value){
            foreach($value as $item){
                if(is_array($item)){
                    foreach($item as $index=>$v_item){
                        echo '<br>'.$index.': '.$v_item;
                    }
                }else{
                    echo $item.' ';
                }
            }
            echo '<br><br>';
        }  */
        return $this->student;
    } /* index */
}
?>