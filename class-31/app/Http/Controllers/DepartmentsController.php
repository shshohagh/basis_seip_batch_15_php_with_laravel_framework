<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studentinfo;
use App\Models\Departments;
use DB;

class DepartmentsController extends Controller
{

    public $department;
    public function add(){
        return view('frontEnd.department.add');
    }
    public function save(Request $request){
        Departments::modelDepartment($request);
        return redirect(route('department.info'));
    }
    public function department(){
        $this->department = Departments::all();
        return view('frontEnd.department.department',[
            'departments'=>$this->department
        ]);
    }
    public function edit(Request $request){
        $this->department = Departments::find($request->department_id);
        return view('frontEnd.department.edit',[
            'department'=>$this->department
        ]);
    }
    public function update(Request $request){
        Departments::modelDepartment($request);
        return redirect(route('department.info'));
    }
    public function delete(Request $request){
        $this->department = Departments::find($request->department_id);
        $this->department->delete();
        return redirect(route('department.info'));
    }

}
