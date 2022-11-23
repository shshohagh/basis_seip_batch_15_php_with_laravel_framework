@extends('frontEnd.master')
@section('title') 
Edit Department Info
@endsection
@section('content') 

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
            <a href="{{route('department.info')}}" class='btn btn-outline-info'>All Department Info</a> 
               <div class="card mt-2">
                <div class="card-body">

                <form action="{{route('department.update')}}" class="form" method="post">
                    @csrf
                    <input type="hidden" name="department_id" value="{{$department->id}}">
                    <div class="mb-3">
                        <label for="" class="form-label">Department Name</label>
                        <input type="text" name="dept_name"  value="{{$department->dept_name}}" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Department Code</label>
                        <input type="text" name="dept_code"  value="{{$department->dept_code}}" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="" class="btn btn-primary btn-lg col-md-12">
                    </div>
                </form>

                </div>
               </div>
            </div>
        </div>
    </div>
</section>
@endsection