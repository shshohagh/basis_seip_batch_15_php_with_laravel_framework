<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    use HasFactory;

    private static $user;

    public static function saveUser($request){
        self::$user = new BlogUser();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->phone = $request->phone;
        self::$user->password = bcrypt($request->password);
        self::$user->save();
    }
}
