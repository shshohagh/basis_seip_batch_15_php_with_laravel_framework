@extends('frontEnd.master');
@section('title')
Add Student Info
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                <a href="{{route('student')}}" class="btn btn-outline-info mb-2">All Students Info</a>
                    <div class="card border-info">
                        <div class="card-header"><h3>Add New Student Info</h3></div>
                        <div class="card-body">
                            <form action="{{route('save')}}" class="form" method='post' enctype='multipart/form-data'>
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" name="name" value="rafi" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" value="rafi@gmail.com" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" name="phone" value="01766996853" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Dept</label>
                                    <input type="text" name="dept" value="CSE" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Address</label>
                                    <textarea name="address" id="" class="form-control" cols="40" rows="5">Lorem</textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-12 mt-5 mb-5">
                                    <label for="" class="form-label">&nbsp;</label>
                                    <input type="submit" value="Submit" class="btn btn-primary col-md-10 offset-1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection