<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
</head>
<body>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('add')}}" class="btn btn-outline-info">Add New Student Info</a>
                    <div class="card border-info mt-2">
                        <div class="card-header"><h3>All Students Info</h3></div>
                        <div class="card-body">
                        <table class="table table-striped table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Dept</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php $sn=1; @endphp
                        @foreach($students as $student)
                        <tr>
                            <td>{{$sn++}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->dept}}</td>
                            <td>{{$student->address}}</td>
                            <td><img src="{{asset($student->image)}}" class="img-fluid" alt=""></td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                        <form action="{{route('edit')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" class="btn btn-primary" value="Edit">
                                </form> 
                                    </td>
                                        <td>
                                        <form action="{{route('delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" class="btn btn-danger" value="Delete">
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
    </section>
   <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script> 
</body>
</html>