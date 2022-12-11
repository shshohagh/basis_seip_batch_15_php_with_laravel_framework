@extends('admin.master')
@section('title')
Blog
@endsection
@section('content')
                <div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Manage Blog</h5>
									</div>
									<hr/>
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-hover">
                                           <thead>
                                           <tr>
                                                <th>Sl</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                           </thead>
                                            @php $sn=1 @endphp
                                            @foreach($blogs as $blog)
                                           <tbody>
                                           <tr>
                                                <td>{{ $sn++ }}</td>
                                                <td>{{ $blog->category_name }}</td>
                                                <td>{{ $blog->author_name }}</td>
                                                <td>{{ substr($blog->title,0,10) }}</td>
                                                <td>{{ substr($blog->slug,0,10) }}</td>
                                                <td>{{ substr($blog->description,0,20) }}</td>
                                                <td><img src="{{ $blog->image }}" alt="" class="img-fluid"></td>
                                                <td>{{ $blog->date }}</td>
                                                <td>
    
                                                    @if($blog->blog_type=='popular') Popular
                                                    @elseif($blog->blog_type=='trending') Trending
                                                    @elseif($blog->blog_type=='latest') Latest
                                                    @endif
    
                                                </td>
                                                <td>{{ $blog->status==1 ? 'Published':'Unpublished' }} </td>
                                                <td>
                                                <table>
                                                        <tr>
                                                            <td>
                                                                <form action="{{route('admin.blog.edit')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                                    <input type="submit" class="btn btn-primary" value="Edit">
                                                                </form>
    
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                               
                                                                <form action="{{route('admin.blog.status')}}" method="post">
                                                                @csrf
                                                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                                    @if($blog->status==1)
                                                                    <input type="submit" class="btn btn-success" value="Publish">
                                                                    @else
                                                                    <input type="submit" class="btn btn-warning" value="Unpublish">
                                                                    @endif
                                                                </form>
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                <form action="{{route('admin.blog.delete')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                                    <input type="submit" onclick="return confirm('Are you sure, Delete This!!')" class="btn btn-danger" value="Delete">
                                                                </form>
                                                            </td>
                                                            
                                                        </tr>
                                                    </table>
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