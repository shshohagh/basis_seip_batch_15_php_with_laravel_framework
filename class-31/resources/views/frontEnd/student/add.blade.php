@extends('frontEnd.master')
@section('title') 
Add
@endsection
@section('content') 

<section class="mt-5">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 offset-3">
            <a href="{{route('student.info')}}" class='btn btn-outline-info'>All Student Info</a> 
               <div class="card mt-2">
                <div class="card-body">

                <form action="{{route('student.save')}}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Student Name</label>
                        <input type="text" name="student_name" value="rafi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="phone" value="01766996853" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" value="rafi@gmail.com" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Departments</label>
                        <select name="dept_id" id="" class="form-select">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->dept_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" id="" cols="30" rows="5" class="form-control">lorem</textarea>
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