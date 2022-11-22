<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    public $student, $image, $imageName, $imageDirectory, $imageUrl;

    public function page(){
        return view('frontEnd.page');
    }

    public function index(){
        $students = Student::all();
        $users = User::all();
        $dashboard_students=count($students);
        $dashboard_users=count($users);
        return view('frontEnd.home',[
            'dashboard_students'=>$dashboard_students,
            'dashboard_users'=>$dashboard_users,
            'dashboard_categories'=>10,
            'dashboard_brands'=>20,
            'students'=>$students
        ]);
    }
    public function student(){
        $students = Student::all();
        return view('frontEnd.student.student',[
            'students'=>$students
        ]);
    }
    public function user(){
        $students = User::all();
        return view('frontEnd.user.user',[
            'students'=>$students
        ]);
    }
    public function add(){
        return view('frontEnd.student.add');
    }
    public function edit(Request $request){
        $student = Student::find($request->student_id);
        return view('frontEnd.student.edit',[
            'student'=>$student
        ]);
    }
    public function delete(Request $request){
        $this->student = Student::find($request->student_id);
        $this->student->delete();
        return redirect(route('student'));
    }
    public function save(Request $request){
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->phone = $request->phone;
        $this->student->dept = $request->dept;
        $this->student->address = $request->address;
        if($request->file('image')){
           $this->student->image = $this->saveImage($request);
        }
        $this->student->save();
        return redirect(route('student'));
    }
    public function update(Request $request){
        $this->student = Student::find($request->student_id);
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->phone = $request->phone;
        $this->student->dept = $request->dept;
        $this->student->address = $request->address;
        if($request->file('image')){
            if($this->student->image!=null){
                unlink($this->student->image);
            }
            $this->student->image = $this->saveImage($request);
            }
        $this->student->save();
        return redirect(route('student'));
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->imageDirectory = 'asset/images/student/';
        $this->imageUrl = $this->imageDirectory.$this->imageName;
        $this->image->move($this->imageDirectory, $this->imageName);
        return $this->imageUrl;  
    }
}
