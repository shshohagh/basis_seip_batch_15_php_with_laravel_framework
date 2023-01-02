@extends('admin.master')
@section('title')
Category
@endsection
@section('content')
<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Add New Sub Category</h5>
									</div>
									<hr/>
									<form id="subCatForm" action="{{route('category.new')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Sub Category Name</label>
										<div class="col-sm-9">
											<select name="category_id" id="" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                            </select>
										</div>
									</div>

                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Sub Category Name</label>
										<div class="col-sm-9">
											<input type="text" name="sub_category_name" class="form-control mb-2" id="category" placeholder="Enter Sub Category Name"  required>
											<span id="errorMessage" class="text-danger"></span>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Sub Category Code</label>
										<div class="col-sm-9">
											<input type="text" name="sub_category_code" class="form-control mb-2" id="categoryCode" placeholder="Enter Sub Category Code"  required>
											<span id="errorMessageCode" class="text-danger"></span>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" id="catBtn" class="btn btn-primary px-5">Submit</button>
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
										<h5 class="mb-0">Manage Category</h5>
									</div>
									<hr/>
									<table class="table table-hover">
                                        <tr>
                                            <th>Sl</th>
                                            <th>Sub Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @php $sn=1 @endphp
                                        @foreach($subcategories as $category)
                                        <tr>
                                            <td>{{ $sn++ }}</td>
                                            <td>{{ $category->sub_category_name }}</td>
											<td>{{ $category->status==1 ? 'Publised':'Unpublished' }} </td>
                                    
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <form action="{{route('category.edit')}}" method="post">
															@csrf
                                                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                                                <input type="submit" class="btn btn-primary" value="Edit">
                                                            </form>

                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form action="{{route('category.delete')}}" method="post">
																@csrf
                                                                <input type="hidden" name="category_id" value="{{ $category->id }}">
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