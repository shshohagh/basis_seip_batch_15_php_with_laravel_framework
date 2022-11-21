<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student info</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
</head>
<body>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-header"><h3>Add New Student Info</h3></div>
                        <div class="card-body">
                            <form action="{{route('save')}}" class="form-control" method='post' enctype='multipart/form-data'>
                                @csrf
                                <div class="col-md-3">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" name="name" value="rafi" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" value="rafi@gmail.com" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" name="phone" value="01766996853" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Dept</label>
                                    <input type="text" name="dept" value="CSE" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Address</label>
                                    <textarea name="address" id="" cols="30" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ea sapiente ipsa omnis alias mollitia! Accusantium est, eum aliquid earum dolorem similique voluptates quam, commodi consequuntur error dolorum doloremque necessitatibus.</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-3 mt-5 mb-5">
                                    <label for="" class="form-label">&nbsp;</label>
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script> 
</body>
</html>