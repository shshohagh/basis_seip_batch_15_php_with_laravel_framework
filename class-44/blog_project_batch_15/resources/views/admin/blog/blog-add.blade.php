@extends('admin.master')
@section('title')
Blog
@endsection
@section('css')
<link href="{{asset('admin')}}/assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Add New Blog</h5>
									</div>
									<hr/>
									<form action="{{route('admin.blog.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
										<div class="col-sm-9">
											<select name="category_id" id="" class="form-control">
											@foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
											@endforeach
                                            </select>
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Author Name</label>
										<div class="col-sm-9">
											<select name="author_id" id="" class="form-control">
											@foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->author_name}}</option>
											@endforeach
                                            </select>
										</div>
									</div>

                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="inputEnterBlogName" placeholder="Enter Title Name" required>
										</div>
									</div>
                                    <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Slug</label>
										<div class="col-sm-9">
											<input type="text" name="slug" class="form-control" id="inputEnterBlogName" placeholder="Enter Slug Name">
										</div>
									</div>
                                    <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Description</label>
										<div class="col-sm-9">
											<textarea name="description" class="form-control" id="" cols="30" rows="5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis vero nostrum aspernatur pariatur possimus laudantium laborum quibusdam asperiores facilis tempora! Fugit, dolor delectus sint quasi odio aliquam libero distinctio eius?</textarea>
										</div>
									</div>
                                    <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Image</label>
										<div class="col-sm-9">
											<input type="file" name="image" class="form-control" required>
										</div>
									</div>
									
                                    <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Date</label>
										<div class="col-sm-9">
											<input type="date" name="date" class="form-control" required>
										</div>
									</div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Type</label>
										<dive class="col-sm-9">
											<select name="blog_type" id="" class="form-control">
                                                <option value="popular">Popular</option>
                                                <option value="trending">Tranding</option>
                                                <option value="latest">Latest</option>
                                            </select>
										</dive>
									</div>

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">

                                            <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" value="1" checked>
                                                    <label class="form-check-label" for="flexRadioDefault1">Published</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" value="0">
                                                    <label class="form-check-label" for="flexRadioDefault1">Unpublished</label>
                                                </div>

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
@section('js')
<script src="{{asset('admin')}}/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="{{asset('admin')}}/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="{{asset('admin')}}/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="{{asset('admin')}}/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
@endsection