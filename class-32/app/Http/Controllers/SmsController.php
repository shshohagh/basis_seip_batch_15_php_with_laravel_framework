<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use DB;

class SmsController extends Controller
{
    public $student, $image, $imageName, $directory, $imageUrl;
    public function index(){
        return view('crud.info.student-add',['result'=>Department::all()]);
    }
    public function manage(){
        $this->student = DB::table('students')
        ->join('departments','students.dept_id','=','departments.id')
        ->select('students.*','departments.dept_name','departments.dept_code')
        ->get();
        return view('crud.info.student-manage',['result'=>$this->student]);
    }
    public function saveStudent(Request $request){
        if($request->student_id){
            $this->student = Student::find($request->student_id);
        }else{
            $this->student=new Student();
        }
        $this->student->student_name = $request->student_name;
        $this->student->phone = $request->phone;
        $this->student->email = $request->email;
        $this->student->dept_id = $request->dept_id;
        if($request->file('image')){
            if($request->student_id){
                unlink($this->student->image);
            }
            $this->student->image = $this->saveImage($request);
        }
        $this->student->address = $request->address;
        $this->student->save();
        return redirect(route('manage'));

    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory ='asset/upload/student_image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;

    }
    public function editStudent(Request $request){
        $this->student= Student::find($request->student_id);
        return view('crud.info.student-edit',['res'=>$this->student,'result'=>Department::all()]);
    }
    public function deleteStudent(Request $request){
        $this->student= Student::find($request->student_id);
        $this->student->delete();
        return redirect(route('manage'));
    }

}
