<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
    <title>Edit Blog</title>
</head>
<body>
<section class="mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{route('blog')}}" class='btn btn-outline-secondary mt-5'>Manage Blog</a>
            <div class="card border-info mt-5">
                <div class="card-header"> Edit Form</div>
                <div class="card-body">
                    <form action="{{route('blog.update')}}" method='post' enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                        <div class="mb-3">
                            <label for="" class="form-label">Blog Title</label>
                            <input type="text" class='form-control' name="blog_title" value="{{ $blog->blog_title }}" id="" placeholder=''>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Blog Category</label>
                            <input type="text" class='form-control' name="blog_category" value="{{ $blog->blog_category }}" id="" placeholder=''>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Author Name</label>
                            <input type="text" class='form-control' name="author_name" value="{{ $blog->author_name }}" id="" placeholder=''>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class='form-control' id="" cols="30" rows="10">{{ $blog->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class='form-control' name="image">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid h-25 w-50" srcset="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">&nbsp;</label>
                            <input type="submit" class='btn btn-primary form-control' value="Submit">
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