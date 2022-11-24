@extends('crud.master')
@section('title') Student | Manage @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Student Manage</h3>
                    </div>
                    <div class="card-body table-responsive">
                       <table class="table table-bordered table-hover">
                           <tr>
                               <th>sl</th>
                               <th>Photo</th>
                               <th>Name</th>
                               <th>Phone</th>
                               <th>Email</th>
                               <th>Dept Name</th>
                               <th>Dept Code</th>
                               
                               <th>Address</th>
                               <th>Action</th>
                           </tr>
                           @php $sn=1 @endphp
                            @foreach($result as $res)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td width="100"><img src="{{asset($res->image)}}" class="img-fluid rounded-circle" alt=""></td>
                                <td>{{$res->student_name}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td><small>{{$res->dept_name}}</small></td>
                                <td>{{$res->dept_code}}</td>
                                
                                <td>{{$res->address}}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <form action="{{route('edit.student')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="student_id" value="{{$res->id}}">
                                                    <input type="submit" value="Edit" class="btn btn-outline-primary">
                                                </form>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            <form action="{{route('delete.student')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{$res->id}}">
                                        <input type="submit" value="Delete" class="btn btn-outline-danger">
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
        </div>
    </div>
@endsection

