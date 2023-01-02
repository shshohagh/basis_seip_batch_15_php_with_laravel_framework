@extends('admin.master')
@section('title')
Setting
@endsection
@section('content')
<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0">Setting</h5>
									</div>
									<hr/>
									<form action="{{route('admin.setting.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf
										<div class="row mb-3">
											<label for="" class="col-sm-3 col-form-label">Company Name</label>
											<div class="col-sm-9">
												<input type="text" name="app_name" value="{{env('APP_NAME')}}" class="form-control" placeholder="APP_NAME">
											</div>
										</div>
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Theme Color</label>
										<div class="col-sm-9">
											<select name="theme_color" id="" class="form-control">
                                                <option {{$settings->theme_color=='minimal-theme'?'selected':''}} value="minimal-theme">minimal-theme</option>
                                                <option {{$settings->theme_color=='dark-theme'?'selected':''}} value="dark-theme">dark-theme</option>
                                                <option {{$settings->theme_color=='semi-dark'?'selected':''}} value="semi-dark">semi-dark</option>
                                              
                                            </select>
										</div>
									</div>
                
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Header Color</label>
										<div class="col-sm-9">
											<select name="header_color" id="" class="form-control">
							<option value="">minimal-theme</option>
							<option {{$settings->header_color=='color-header headercolor1'?'selected':''}} value="color-header headercolor1">headercolor1</option>
							<option {{$settings->header_color=='color-header headercolor2'?'selected':''}} value="color-header headercolor2">headercolor2</option>
							<option {{$settings->header_color=='color-header headercolor3'?'selected':''}} value="color-header headercolor3">headercolor3</option>
							<option {{$settings->header_color=='color-header headercolor4'?'selected':''}} value="color-header headercolor4">headercolor4</option>
							<option {{$settings->header_color=='color-header headercolor5'?'selected':''}} value="color-header headercolor5">headercolor5</option>
							<option {{$settings->header_color=='color-header headercolor6'?'selected':''}} value="color-header headercolor6">headercolor6</option>
							<option {{$settings->header_color=='color-header headercolor7'?'selected':''}} value="color-header headercolor7">headercolor7</option>
                                            </select>
										</div>
									</div>
									  <!-- minimal-theme, dark-theme, semi-dark / color-header headercolor1 - 7 -->
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