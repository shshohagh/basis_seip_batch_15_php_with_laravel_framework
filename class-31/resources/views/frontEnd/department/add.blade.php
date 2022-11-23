@extends('frontEnd.master')
@section('title') 
Add New Department Info
@endsection
@section('content') 

<section class="mt-5">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 offset-3">
            <a href="{{route('department.info')}}" class='btn btn-outline-info'>All Department Info</a> 
               <div class="card mt-2">
                <div class="card-body">

                <form action="{{route('department.save')}}" class="form" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Department Name</label>
                        <input type="text" name="dept_name" id="" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Department Code</label>
                        <input type="text" name="dept_code" id="" class="form-control form-control-lg">
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