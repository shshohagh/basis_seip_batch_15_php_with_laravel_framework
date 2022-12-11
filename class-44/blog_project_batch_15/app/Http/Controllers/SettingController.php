<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public $setting;

    public function index(){
       return view('admin.setting.setting');
    }
    public function saveSetting(Request $request){
        $this->setting = new Setting();
        $this->setting->theme_color = $request->theme_color;
        $this->setting->header_color = $request->header_color;
        $this->setting->save();
        return back();
    }
}
