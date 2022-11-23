<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentinfo extends Model
{
    use HasFactory;

    private static $student,$image,$imageName,$imageDiretory,$imageUrl;
    public static function modelStudentinfo($request){
        if($request->student_id){ /* When Update */
            self::$student = Studentinfo::find($request->student_id);
        }else{  /* When Save */
            self::$student = new Studentinfo();
        }
        self::$student->student_name = $request->student_name;
        self::$student->phone = $request->phone;
        self::$student->email = $request->email;
        self::$student->dept_id = $request->dept_id;
        if($request->file('image')){
            if($request->student_id){ /* When Update */
                if(self::$student->image!=null){
                    unlink(self::$student->image);
                }
            }
             /*  When Save + Update */
            self::$student->image = self::saveImage($request);
        }
        self::$student->address = $request->address;
        self::$student->save();
    }
    private static function saveImage($request){
        self::$image=$request->file('image');
        self::$imageName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$imageDiretory = 'asset/images/student/';
        self::$imageUrl=self::$imageDiretory.self::$imageName;  
        self::$image->move(self::$imageDiretory, self::$imageName);
        return self::$imageUrl;
    }
}
