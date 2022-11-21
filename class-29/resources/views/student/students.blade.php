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
                    <a href="{{route('add')}}" class="btn btn-outline-info mb-2">Add New Student Info</a>
                    <div class="card border-info">
                        <div class="card-header"><h3>All Students Info</h3></div>
                        <div class="card-body">
                        <table class="table table-striped table-hover">
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
            </div>
        </div>
    </section>
   <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script> 
</body>
</html>