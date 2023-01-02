@extends('frontEnd.master')
@section('title')
Signup
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
          <form action="{{route('user.register')}}" method="post">
            @csrf
            <div class="row mb-3">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="form-group col-md-6">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" id="email" placeholder="Your Password" required>
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