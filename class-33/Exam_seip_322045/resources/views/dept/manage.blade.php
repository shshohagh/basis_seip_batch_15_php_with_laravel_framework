@extends('master')
@section('title') Department | Manage @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Department Manage</h3>
                    </div>
                    <div class="card-body table-responsive">
                       <table class="table table-bordered table-hover">
                           <tr>
                               <th>Sl</th>
                              
                               <th>Department Name</th>
                               <th>Department Code</th>
                              
                               <th>Action</th>
                           </tr>
                           @php $sn=1 @endphp
                            @foreach($result as $res)
                            <tr>
                                <td>{{$sn++}}</td>
                                
                                <td>{{$res->department_name}}</td>
                                <td>{{$res->department_code}}</td>
                               
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <form action="{{route('dept.edit')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="dept_id" value="{{$res->id}}">
                                                    <input type="submit" value="Edit" class="btn btn-outline-primary">
                                                </form>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            <form action="{{route('dept.delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="dept_id" value="{{$res->id}}">
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

