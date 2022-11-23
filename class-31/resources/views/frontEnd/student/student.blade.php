@extends('frontEnd.master')
@section('title') 
Student Info
@endsection
@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="{{route('student.add')}}" class='btn btn-outline-info mb-2'>Add New Student Info</a> 
                @php $sn=1 @endphp
                <table class="table table-striped table-hover">
                    <tr>
                        <th>SL</th>
                        <th>Student Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Dept Name</th>
                        <th>Dept Code</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td>{{$sn++}}</td>
                        <td>{{$student->student_name}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->dept_name}}</td>
                        <td>{{$student->dept_code}}</td>
                        <td width="200">
                            <img src="{{asset($student->image)}}" class="img-fluid rounded-circle w-25" alt="" srcset="">
                        </td>
                        <td>{{$student->address}}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                            <form action="{{route('student.edit')}}" method="post">
                                @csrf
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                                <input type="submit" value="Edit" class="btn btn-primary me-2">
                            </form>
                                    </td>
                                    <td>
                            <form action="{{route('student.delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                                <input type="submit" value="Delete" class="btn btn-danger">
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