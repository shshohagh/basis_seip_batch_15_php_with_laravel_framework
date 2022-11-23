@extends('frontEnd.master')
@section('title') 
Department Info
@endsection
@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="{{route('department.add')}}" class='btn btn-outline-info mb-2'>Add New Department Info</a> 
                @php $sn=1 @endphp
                <table class="table table-striped table-hover">
                    <tr>
                        <th>SL</th>
                        <th>Department Name</th>
                        <th>Department Code</th>

                        <th>Action</th>
                    </tr>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{$sn++}}</td>
                        <td>{{$department->dept_name}}</td>
                        <td>{{$department->dept_code}}</td>

                        <td>
                        <table>
                                <tr>
                                    <td>
                            <form action="{{route('department.edit')}}" method="post">
                                @csrf
                                <input type="hidden" name="department_id" value="{{$department->id}}">
                                <input type="submit" value="Edit" class="btn btn-primary me-2">
                            </form>
                                    </td>
                                    <td>
                            <form action="{{route('department.delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="department_id" value="{{$department->id}}">
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