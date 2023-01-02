@extends('admin.master')
@section('title') 
Manage Product
@endsection
@section('content') 
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Product</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="{{route('add.product')}}" class="btn btn-success">Add New Product</a>
                                <h3>{{ session('message') }}</h3>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Products
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>sl</th>
                                            <th>Name</th>
                                            <th>Category Name</th>
                                            <th>Brand Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->category_name}}</td>
                                            <td>{{$product->brand_name}}</td>
                                            <td>{{$product->description}}</td>
                                            <td><img src="{{asset($product->image)}}" alt="" height="50"></td>
                                            <td>{{$product->status==1 ? 'Published':'Unpublished'}}</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            @if($product->status==1)
                                                            <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-warning btn-sm">Unpublished</a>
                                                            @else
                                                            <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-outline-primary btn-sm">Published</a>
                                                            @endif
                                                        </td> 
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection