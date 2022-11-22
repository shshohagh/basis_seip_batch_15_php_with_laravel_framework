@extends('frontEnd.master');
@section('title')
All Students
@endsection
@section('content')
<section class='mt-5'>
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 mb-5">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 calss='card-title'>{{ $dashboard_blogs }}</h5>
                            <p calss='card-text'>Blogs</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-5">
                    <div class="card border-success">
                        <div class="card-body">
                            <h5 calss='card-title'>{{ $dashboard_categories }}</h5>
                            <p calss='card-text'>Categories</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card border-warning">
                        <div class="card-body">
                            <h5 calss='card-title'>{{ $dashboard_students }}</h5>
                            <p calss='card-text'>Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h5 calss='card-title'>{{ $dashboard_users }}</h5>
                            <p calss='card-text'>Users</p>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--s-->
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Sales Report</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar" class="align-text-bottom"></span>
                                This week
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                    <!--e-->
                </div>
                <div class="col-md-6 table-responsive">
                 <h1 class="h2">All Students</h1>
                 <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Dept</th>
                            <th>Address</th>
                            
                            <th>Action</th>
                        </tr>
                        
                        @foreach($students as $student)
                        <tr>
                        <td><img src="{{asset($student->image)}}" class="img-fluid rounded-circle w-50" alt=""></td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->dept}}</td>
                            <td>{{$student->address}}</td>
                            
                            <td>
                                <table>
                                    <tr>
                                        <td class="pe-2">
                                        <form action="{{route('edit')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" class="btn btn-outline-primary" value="Edit">
                                </form> 
                                    </td>
                                        <td>
                                        <form action="{{route('delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" onclick="return confirm('Are you sure, delete this!!')" class="btn btn-outline-danger" value="Delete">
                                </form>
                                        </td>
                                    </tr>
                                </table>
                                
                               
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection