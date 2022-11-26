<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $student, $image, $imageName, $directory, $imageUrl;

    public static function studentSaveModel($request){
        if($request->student_id){
            self::$student = Student::find($request->student_id);
        }else{
            self::$student=new Student();
        }
        self::$student->name = $request->name;
        self::$student->phone = $request->phone;
        self::$student->email = $request->email;
        self::$student->department_id = $request->department_id;
        self::$student->section_id = $request->section_id;
        self::$student->address = $request->address;
        if($request->file('image')){
            if($request->student_id){
                unlink(self::$student->image);
            }
            self::$student->image = self::saveImage($request);
        }
        self::$student->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory ='asset/img/student/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }

}
