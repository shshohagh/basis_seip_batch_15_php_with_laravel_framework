@extends('frontEnd.master')
@section('title')
Login
@endsection
@section('content')
<section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">@yield('title')</h1>
          </div>
        </div>



        <div class="mt-5">
          <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="row mb-3">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="user_name" value="rafi1@gmail.com" placeholder="Your User Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" value="12345678" placeholder="Your Password" required>
              </div>
            </div>
            
            <div class="my-3">

            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>
@endsection