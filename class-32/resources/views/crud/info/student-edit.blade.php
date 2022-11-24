@extends('crud.master')
@section('title') Student | Edit @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Student Edit Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="student_id" value="{{$res->id}}">
                            <div class="mb-3">
                                <label  class="form-label">Student Name</label>
                                <input type="text" name="student_name" value="{{$res->student_name}}" class="form-control"  placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Phone</label>
                                <input type="text" name="phone" value="{{$res->phone}}" class="form-control"  placeholder="Student Phone">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Email</label>
                                <input type="email" name="email" value="{{$res->email}}" class="form-control"  placeholder="Student Email">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department</label>
                                <select name="dept_id" class="form-control">
                                   @foreach($result as $ress)
                                    <option value="{{$ress->id}}">{{$ress->dept_name}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <textarea class="form-control" name="address" rows="3">{{$res->address}}</textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Update" class="form-control btn btn-outline-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
