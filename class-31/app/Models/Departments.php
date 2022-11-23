<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    
    private static $department;
    public static function modelDepartment($request){
        if($request->department_id){
            self::$department = Departments::find($request->department_id);
        }else{
            self::$department =new Departments();
        }
        self::$department->dept_name = $request->dept_name;
        self::$department->dept_code = $request->dept_code;
        self::$department->save();
    }

}
