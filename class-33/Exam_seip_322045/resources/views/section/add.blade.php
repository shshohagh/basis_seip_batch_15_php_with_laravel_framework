@extends('master')
@section('title') Section | Add @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 shadow-bottom shadow-lg bg-light">
                    <div class="card-header">
                        <h3 class="text-center">Section Add</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('section.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Section Name</label>
                                <input type="text" name="section_name" value="Section-A" class="form-control"  placeholder="Section Name">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" class="form-control btn btn-outline-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
