@extends('admin.master')
@section('title')
Author
@endsection
@section('content')
<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Add New Author</h5>
									</div>
									<hr/>
									<form action="{{route('author.new')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Author Name</label>
										<div class="col-sm-9">
											<input type="text" name="author_name" class="form-control" id="inputEnterAuthorName" placeholder="Enter Author Name">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Image</label>
										<div class="col-sm-9">
											<input type="file" name="image" class="form-control" required>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary px-5">Submit</button>
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Manage Author</h5>
									</div>
									<hr/>
									<table class="table table-hover">
                                        <tr>
                                            <th>Sl</th>
                                            <th>Image</th>
                                            <th>Author Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @php $sn=1 @endphp
                                        @foreach($authors as $author)
                                        <tr>
                                            <td>{{ $sn++ }}</td>
                                            <td><img src="{{ asset($author->author_image) }}" alt="" class="img-fluid h-25 rounded-circle"></td>
                                            <td>{{ $author->author_name }}</td>
                                            <td>{{ $author->status==1 ? 'Publised':'Unpublished' }} </td>
                                            <td>
                                            <table>
                                                    <tr>
                                                        <td>
                                                            <form action="{{route('author.edit')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="author_id" value="{{ $author->id }}">
                                                                <input type="submit" class="btn btn-primary" value="Edit">
                                                            </form>

                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form action="{{route('author.delete')}}" method="post">
                                                            @csrf
                                                                <input type="hidden" name="author_id" value="{{ $author->id }}">
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
                @endsection