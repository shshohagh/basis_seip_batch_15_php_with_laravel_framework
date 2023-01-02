@extends('admin.master')
@section('title') 
Add Product
@endsection
@section('content') 
<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add New Product</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('new.product') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="name" placeholder="Product Name" />
                                                <label for="inputEmail">Product Name</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="category_name" placeholder="Category" />
                                                        <label>Category</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="brand_name" placeholder="Brand Name" />
                                                        <label>Brand Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="price" placeholder="Product Price" />
                                                <label>Product Price</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                                                <label>Description</label>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="image" />
                                               
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection