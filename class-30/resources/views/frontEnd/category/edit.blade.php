@extends('frontEnd.master');
@section('title')
Edit Category
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                <a href="{{route('category')}}" class="btn btn-outline-info mb-2">All Categories</a>
                    <div class="card border-info">
                        <div class="card-header"><h3>Edit Category</h3></div>
                        <div class="card-body">
                            <form action="{{route('category.update')}}" class="form" method='post' enctype='multipart/form-data'>
                                @csrf
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Status</label>
                                    <input type="radio" {{$category->status==1 ? 'checked':''}} name="status" value="1"> Published
                                    <input type="radio" {{$category->status==0 ? 'checked':''}} name="status" value="0"> Unpublished
                                </div>
                                <div class="col-md-12 mt-5 mb-5">
                                    <label for="" class="form-label">&nbsp;</label>
                                    <input type="submit" value="Submit" class="btn btn-primary col-md-10 offset-1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection