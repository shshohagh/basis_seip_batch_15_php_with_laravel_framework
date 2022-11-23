@extends('frontEnd.master')
@section('title') 
Edit Student Info
@endsection
@section('content') 

<section class="mt-5">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 offset-3">
            <a href="{{route('student.info')}}" class='btn btn-outline-info'>All Student Info</a> 
               <div class="card mt-2">
                <div class="card-body">

                <form action="{{route('student.update')}}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="student_id" value="{{$student->id}}">
                    <div class="mb-3">
                        <label for="" class="form-label">Student Name</label>
                        <input type="text" name="student_name" value="{{$student->student_name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$student->email}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deparments</label>
                        <select name="dept_id" class="form-select">
                            @foreach($departments as $department)
                            <option {{$student->dept_id==$department->id? 'selected':''}} value="{{$department->id}}">{{$department->dept_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                    <img src="{{asset($student->image)}}" class="img-fluid w-25" alt="" srcset="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" value="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" id="" cols="30" rows="5" class="form-control">{{$student->address}}</textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="" class="btn btn-primary col-md-12">
                    </div>

                </form>

                </div>
               </div>
            </div>
        </div>
    </div>
</section>
@endsection