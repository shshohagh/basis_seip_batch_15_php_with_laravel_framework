@extends('frontEnd.master');
@section('title')
All Students
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                <a href="{{route('student')}}" class="btn btn-outline-info mb-2">All Students Info</a>
                    <div class="card border-primary">
                        <div class="card-header"><h3>Edit Student Info</h3></div>
                        <div class="card-body">
                            <form action="{{route('update')}}" class="form" method='post' enctype='multipart/form-data'>
                                @csrf
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" name="name" id="" value="{{$student->name}}" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" id="" value="{{$student->email}}" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="" value="{{$student->phone}}" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Dept</label>
                                    <input type="text" name="dept" id="" value="{{$student->dept}}" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Address</label>
                                    <textarea name="address" class="form-control" cols="30" rows="5">{{$student->address}}</textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                <label for="" class="form-label">&nbsp;</label>
                                    <img src="{{asset($student->image)}}" class="img-fluid w-50 offset-3" alt="">
                                </div>
                                <div class="col-md-12 mt-5 mb-5">
                                    <label for="" class="form-label">&nbsp;</label>
                                    <input type="submit" value="Submit" class="btn btn-primary  col-md-10 offset-1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection