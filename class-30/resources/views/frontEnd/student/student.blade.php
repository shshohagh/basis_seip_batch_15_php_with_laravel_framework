@extends('frontEnd.master');
@section('title')
All Students
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive">
                <a href="{{route('add')}}" class="btn btn-outline-info mb-2">Add Student Info</a>
                 <h1 class="card-title">All Students</h1>
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
                        <td><img src="{{asset($student->image)}}" class="img-fluid rounded-circle" width="50" alt=""></td>
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