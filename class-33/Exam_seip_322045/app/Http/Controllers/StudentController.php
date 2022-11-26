<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Dept;
use DB;

class StudentController extends Controller
{
    public $student;
    public function studentAdd(){
        return view('student.add',[
            'result1'=> Dept::all(),
            'result2'=> Section::all()
        ]);
    }
    public function studentSave(Request $request){
        Student::studentSaveModel($request);
        return redirect(route('student.manage'));
    }
    public function studentEdit(Request $request){
        return view('student.edit',[
            'result'=> Student::find($request->student_id),
            'result1'=> Dept::all(),
            'result2'=> Section::all()
        ]);
    }
    public function studentManage(){
        $this->student = DB::table('students')
        ->join('sections','students.section_id','=','sections.id')
        ->join('depts','students.department_id','=','depts.id')
        ->select('students.*','sections.section_name','depts.department_name')
        ->get();
        return view('student.manage',[
            'result'=> $this->student
        ]);
    }
    public function studentDelete(Request $request){
        $this->student = Student::find($request->student_id);
        unlink($this->student->image);
        $this->student->delete();
        return back();
    }
    
}
