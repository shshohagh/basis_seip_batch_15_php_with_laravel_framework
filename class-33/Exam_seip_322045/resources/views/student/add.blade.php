@extends('master')
@section('title') Student | Add @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Student Add</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" name="name" value="Sohag" class="form-control"  placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" name="phone" value="01766996853" class="form-control"  placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="email" name="email" value="shshohagh3@gmail.com" class="form-control"  placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department Name</label>
                                <select name="department_id" class="form-control">
                                  
                                    @foreach($result1 as $res1)
                                    <option value="{{$res1->id}}">{{$res1->department_name}}</option>
                                    @endforeach
                                    
                                
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Section Name</label>
                                <select name="section_id" class="form-control">
                                  
                                    @foreach($result2 as $res2)
                                    <option value="{{$res2->id}}">{{$res2->section_name}}</option>
                                    @endforeach
                                    
                                
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <textarea class="form-control" name="address" rows="3">Mirpur, Dhaka-1207</textarea>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <input type="submit" value="Submit" class="form-control btn btn-outline-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
