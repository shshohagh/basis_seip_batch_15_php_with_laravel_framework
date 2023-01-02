@extends('backEnd.master')
@section('title')
Hero
@endsection
@section('content')
<div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Orders overview</h6>
              <p class="text-sm">
                <i class="fa fa-plus text-success" aria-hidden="true"></i>
                Section <span class="font-weight-bold">One</span> 
              </p>
            </div>
            <div class="card-body p-3">

            <form role="form">
                <div class="row">

                    <div class="col-lg-2">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                                <img src="{{asset('frontEnd')}}/images/happy-bearded-young-man.jpg" class="rounded-circle" height="100" width="100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="file" name="pic" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{$hero->title}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Sub Title</label>
                            <input type="text" name="sub_title" value="{{$hero->sub_title}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                                <img src="{{asset('frontEnd')}}/images/portrait-happy-excited-man-holding-laptop-computer.png" class="rounded-circle" height="300" width="300" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="file" name="pic" class="form-control">
                        </div>
                    </div>
                </div>
            <div class="text-center">
              <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update</button>
            </div>
          </form>

            </div>
          </div>
        </div>

@endsection