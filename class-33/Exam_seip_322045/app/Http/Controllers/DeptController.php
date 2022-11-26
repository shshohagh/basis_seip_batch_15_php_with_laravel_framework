<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;

class DeptController extends Controller
{
    private $dept;

    public function deptAdd(){
        return view('dept.add');
    }

    public function deptSave(Request $request){
        Dept::deptSaveModel($request);
        return redirect(route('dept.manage'));
    }
    public function deptEdit(Request $request){
        return view('dept.edit',[
            'result'=> Dept::find($request->dept_id)
        ]);
    }
    public function deptManage(){
        return view('dept.manage',[
            'result'=> Dept::all()
        ]);
    }
    public function deptDelete(Request $request){
        $this->dept = Dept::find($request->dept_id);
        $this->dept->delete();
        return back();
    }
}
