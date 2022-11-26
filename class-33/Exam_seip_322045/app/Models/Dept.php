<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    use HasFactory;

    public static $dept;

    public static function deptSaveModel($request){
        if($request->dept_id){
            self::$dept = Dept::find($request->dept_id);
        }else{
            self::$dept=new Dept();
        }
        self::$dept->department_name = $request->department_name;
        self::$dept->department_code = $request->department_code;
        self::$dept->save();
    }
}
