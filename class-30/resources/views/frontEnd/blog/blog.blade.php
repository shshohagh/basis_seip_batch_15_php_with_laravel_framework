@extends('frontEnd.master');
@section('title')
All Blogs
@endsection
@section('content')
<section class="mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{route('blog.add')}}" class='btn btn-outline-secondary mt-5'>Add Blog</a>
            <div class="card border-info mt-5">
                <div class="card-header"> All Blogs</div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover border-danger table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Blog Title</th>
                            <th>Blog Category</th>
                            <th>Author Name</th>
                            <th>Description</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->category_name }}</td>
                            <td>{{ $blog->author_name }}</td>
                            <td>{{ $blog->description }}</td>
                            <td><img src="{{asset($blog->image)}}" class='' width='200' alt="" srcset=""></td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                        <form action="{{route('blog.edit')}}" id="eidt" method="post">
                                                @csrf
                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                <input type="submit" class="btn btn-primary" value="Edit">
                                            </form>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                        <form action="{{route('blog.delete.post')}}" id="delete" method="post">
                                                @csrf
                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                <input type="submit" class="btn btn-danger" onClick="return confirm('Are you sure, Delete this!!');" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            {{--
                                <a href="{{route('blog.delete.get',['id'=>$blog->id])}}" onClick="return confirm('Are yiu sure, Delete thise!!');" class='btn btn-danger'>DeleteGet</a>
                                <a href="" onClick="event.preventDefault(); document.getElementById('delete').submit(); return confirm('Are you sure, Delete this!!');" class='btn btn-danger'>DeletePost</a>
                                --}}   
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

@endsection