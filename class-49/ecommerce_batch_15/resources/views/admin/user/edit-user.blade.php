@extends('admin.master')
@section('title') 
Edit User
@endsection
@section('content') 
<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('update.user') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="name"  value="{{ $user->name }}" placeholder="Name" />
                                                <label for="inputEmail">Name</label>
                                            </div>
                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" name="email"  value="{{ $user->email }}" placeholder="Email" />
                                                <label>Email</label>
                                            </div>
                                            @if(Auth::user()->id==$user->id)
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="password" placeholder="Name" />
                                                <label for="inputEmail">Password</label>
                                            </div>
                                            @endif
                                    
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Update"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection