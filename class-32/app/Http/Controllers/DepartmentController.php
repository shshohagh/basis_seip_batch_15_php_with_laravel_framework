<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public $dept;
    public function deptAdd(){ 
        return view('crud.dept.add'); 
    }
    public function deptManage(){ 
        return view('crud.dept.manage',['result'=>Department::all()]); 
    }
    public function deptSave(Request $request){
        if($request->dept_id){
            $this->dept = Department::find($request->dept_id);
        }else{
            $this->dept=new Department();
        }
        $this->dept->dept_name = $request->dept_name;
        $this->dept->dept_code = $request->dept_code;
        $this->dept->save();
        return redirect(route('dept.manage'));

    }
    public function deptEdit(Request $request){ 
        return view('crud.dept.edit',['dept'=>Department::find($request->dept_id)]); 
    }
    public function deptDelete(Request $request){ 
        $this->dept = Department::find($request->dept_id);
        $this->dept->delete();
        return redirect(route('dept.manage'));
     }

}
