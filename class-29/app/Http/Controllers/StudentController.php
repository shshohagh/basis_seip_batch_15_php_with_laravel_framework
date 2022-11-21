<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public $student, $image, $imageName, $imageDirectory, $imageUrl;

    public function index(){
        $students = Student::all();
        return view('student.students',[
            'students'=>$students
        ]);
    }
    public function add(){
        return view('student.add');
    }
    public function edit(Request $request){
        $student = Student::find($request->student_id);
        return view('student.edit',[
            'student'=>$student
        ]);
    }
    public function delete(Request $request){
        $this->student = Student::find($request->student_id);
        $this->student->delete();
        return redirect(route('home'));
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
        return redirect(route('home'));
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
        return redirect(route('home'));
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->imageDirectory = 'asset/image/';
        $this->imageUrl = $this->imageDirectory.$this->imageName;
        $this->image->move($this->imageDirectory, $this->imageName);
        return $this->imageUrl;  
    }
}
