@extends('frontEnd.master');
@section('title')
All Blogs
@endsection
@section('content')
<section class="mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="{{route('blog')}}" class='btn btn-outline-secondary mt-5'>Manage Blog</a>
            <div class="card border-info mt-5">
                <div class="card-header"> Add Form</div>
                <div class="card-body">
                    <form action="{{route('blog.new')}}" method='post' enctype='multipart/form-data'>
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Blog Title</label>
                            <input type="text" class='form-control' name="blog_title" id="" placeholder=''>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Blog Category</label>
                            <select name="blog_category" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            {{--<input type="text" class='form-control' name="blog_category" id="" placeholder=''>--}}
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Author Name</label>
                            <input type="text" class='form-control' name="author_name" id="" placeholder=''>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class='form-control' id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class='form-control' name="image">
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
@endsection