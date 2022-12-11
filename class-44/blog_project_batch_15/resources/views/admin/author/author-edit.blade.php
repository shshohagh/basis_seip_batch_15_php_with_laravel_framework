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
                                        <input type="hidden" name="author_id" value="{{$author->id}}">
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Author Name</label>
										<div class="col-sm-9">
											<input type="text" name="author_name" value="{{$author->author_name}}" class="form-control" id="inputEnterAuthorName" placeholder="Enter Author Name">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12">
										<img src="{{ asset($author->author_image) }}" alt="" class="img-fluid">
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
                @endsection