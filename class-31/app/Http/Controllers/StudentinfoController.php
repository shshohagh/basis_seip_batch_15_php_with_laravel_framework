<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studentinfo;
use App\Models\Departments;
use DB;

class StudentinfoController extends Controller
{
    public $student;
    public function add(){
        $this->departments = Departments::all();
        return view('frontEnd.student.add',[
            'departments'=>$this->departments
        ]);
    }
    public function save(Request $request){
        Studentinfo::modelStudentinfo($request);
        return redirect(route('student.info'));
    }
    public function student(){
        $this->student = DB::table('studentinfos')
        ->join('departments','studentinfos.dept_id','=','departments.id')
        ->select('studentinfos.*','departments.dept_name','departments.dept_code')
        ->get(); 
        return view('frontEnd.student.student',[
            'students'=>$this->student
        ]);
    }
    public function edit(Request $request){
        $this->student = Studentinfo::find($request->student_id);
        $this->departments = Departments::all();
        return view('frontEnd.student.edit',[
            'student'=>$this->student,
            'departments'=>$this->departments
        ]);
    }
    public function update(Request $request){
        Studentinfo::modelStudentinfo($request);
        return redirect(route('student.info'));
    }
    public function delete(Request $request){
        $this->student = Studentinfo::find($request->student_id);
        if($this->student->image!=null){
            unlink($this->student->image);
        }
        $this->student->delete();
        return redirect(route('student.info'));
    }
}
