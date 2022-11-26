<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public static $section;

    public static function sectionSaveModel($request){
        if($request->section_id){
            self::$section = Section::find($request->section_id);
        }else{
            self::$section=new Section();
        }
        self::$section->section_name = $request->section_name;
        self::$section->save();
    }
}
