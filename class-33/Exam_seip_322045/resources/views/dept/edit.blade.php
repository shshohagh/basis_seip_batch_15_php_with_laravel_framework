@extends('master')
@section('title') Department | Edit @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Department Edit</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('dept.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="dept_id" value="{{$result->id}}">
                            <div class="mb-3">
                                <label  class="form-label">Department Name</label>
                                <input type="text" name="department_name" value="{{$result->department_name}}" class="form-control"  placeholder="Department Name">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department Code</label>
                                <input type="text" name="department_code" value="{{$result->department_code}}" class="form-control"  placeholder="Department Code">
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
