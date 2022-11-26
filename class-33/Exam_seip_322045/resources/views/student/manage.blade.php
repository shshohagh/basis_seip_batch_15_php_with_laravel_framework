@extends('master')
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
                               <th>Sl</th>
                               <th>Photo</th>
                               <th>Name</th>
                               <th>Phone</th>
                               <th>Email</th>
                               <th>Department Name</th>
                               <th>Section Name</th>
                               <th>Address</th>
                               <th>Action</th>
                           </tr>
                           @php $sn=1 @endphp
                            @foreach($result as $res)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td><img src="{{asset($res->image)}}" class="img-fluid rounded-circle" alt=""></td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td><small>{{$res->department_name}}</small></td>
                                <td><small>{{$res->section_name}}</small></td>
                                <td>{{$res->address}}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <form action="{{route('student.edit')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="student_id" value="{{$res->id}}">
                                                    <input type="submit" value="Edit" class="btn btn-outline-primary">
                                                </form>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            <form action="{{route('student.delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{$res->id}}">
                                        <input type="submit" value="Delete" onClick="return confirm('Are you sure This Delete !!')" class="btn btn-outline-danger">
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

