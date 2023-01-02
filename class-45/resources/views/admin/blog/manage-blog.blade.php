@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0"> Manage Category </h5>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>category</th>
                                        <th>author</th>
                                        <th>title</th>
                                        <th>slug</th>
                                        <th>description</th>
                                        <th>image</th>
                                        <th>date</th>
                                        <th>blog type</th>
                                        <th>status</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($blogs as $blog)
                                    <tbody>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $blog->category_name }}</td>
                                            <td>{{ $blog->author_name }}</td>
                                            <td>{{ substr($blog->title, 0,10) }}</td>
                                            <td>{{ substr($blog->slug, 0,10) }}</td>
                                            <td>{{ substr($blog->description, 0,10) }}</td>
                                            <td>
                                                <img src="{{ $blog->image }}" alt="" height="35" width="50">
                                            </td>
                                            <td>{{ $blog->date }}</td>
                                            <td>{{ $blog->blog_type }}</td>
                                            <td>{{ $blog->status==1? 'published' : 'unpublished' }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm"> Edit </a>
                                                @if($blog->status==1)
                                                    <a href="{{ route('status', ['id'=>$blog->id]) }}" class="btn btn-warning btn-sm"> unpublished </a>
                                                @else
                                                    <a href="{{ route('status', ['id'=>$blog->id]) }}" class="btn btn-success btn-sm"> published </a>
                                                @endif
                                                <form action="{{ route('delete.blog') }}" method="post">
                                                    @csrf
                                                    <input type="hidden"  name="blog_id" value="{{ $blog->id }}">
                                                    <button type="submit" onclick="return confirm('Are you sure? wanna delete this!')" class="btn btn-danger btn-sm"> Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
