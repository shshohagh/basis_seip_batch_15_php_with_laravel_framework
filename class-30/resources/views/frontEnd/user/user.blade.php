@extends('frontEnd.master');
@section('title')
All User
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive">
                <a href="" class="btn btn-outline-info mb-2">Add User Info</a>
                 <h1 class="card-title">All Users</h1>
                 <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                      
                            
                            <th>Action</th>
                        </tr>
                        
                        @foreach($students as $student)
                        <tr>
                       
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                       
                            
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