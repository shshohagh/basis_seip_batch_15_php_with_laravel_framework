@extends('frontEnd.master');
@section('title')
All Categories
@endsection
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive">
                <a href="{{route('category.add')}}" class="btn btn-outline-info mb-2">Add Category</a>
                 <h1 class="card-title">All Categories</h1>
                 <table class="table table-striped table-bordered table-hover">
                        <tr>
                         
                            <th>Name</th>
                            <th>Status</th>

                            
                            <th>Action</th>
                        </tr>
                        
                        @foreach($categories as $category)
                        <tr>

                            <td>{{$category->category_name}}</td>
                            <td>
                                <span class="text-{{$category->status==1 ?'primary' : 'danger'}}">
                                    {{$category->status==1 ?'Published' : 'Unpublished'}}
                                </span>
                            </td>

                            
                            <td>
                                <table>
                                    <tr>
                                        <td class="pe-2">
                                        <form action="{{route('category.edit')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$category->id}}">
                                    <input type="submit" class="btn btn-outline-primary" value="Edit">
                                </form> 
                                    </td>
                                        <td>
                                        <form action="{{route('category.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$category->id}}">
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
    </section>
@endsection