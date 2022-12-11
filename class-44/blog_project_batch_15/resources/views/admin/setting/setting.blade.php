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
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Theme Color</label>
										<div class="col-sm-9">
											<select name="theme_color" id="" class="form-control">
                                                <option value="minimal-theme">minimal-theme</option>
                                                <option value="dark-theme">dark-theme</option>
                                                <option value="semi-dark">semi-dark</option>
                                              
                                            </select>
										</div>
									</div>
                
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Header Color</label>
										<div class="col-sm-9">
											<select name="header_color" id="" class="form-control">
                                                <option value="color-header headercolor1">headercolor1</option>
                                                <option value="color-header headercolor2">headercolor2</option>
                                                <option value="color-header headercolor3">headercolor3</option>
                                                <option value="color-header headercolor4">headercolor4</option>
                                                <option value="color-header headercolor5">headercolor5</option>
                                                <option value="color-header headercolor6">headercolor6</option>
                                                <option value="color-header headercolor7">headercolor7</option>
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