@extends('frontEnd.master')
@section('title')
Blog Category
@endsection
@section('content')
<section>
      <div class="container">
        <div class="row">

          <div class="col-md-9" data-aos="fade-up">
            <h3 class="category-title">Category: {{ $category->category_name }}</h3>
            @if(count($blogs)>0)
            @foreach($blogs as $blog)
            <div class="d-md-flex post-entry-2 half">
              <a href="{{route('blog.details',['slug'=>$blog->slug])}}" class="me-4 thumbnail">
                <img src="{{ asset($blog->image) }}" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date">{{ $blog->category_name }}</span> <span class="mx-1">&bullet;</span> <span>{{ date("M jS 'y",strtotime($blog->date)) }}</span></div>
                <h3><a href="{{route('blog.details',['slug'=>$blog->slug])}}">{{ $blog->description }}</p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="{{ asset($blog->author_image) }}" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0">{{ $blog->author_name }}</h3>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

            <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a>
              </div>
            </div>
            
            @else
              <div class="text-start py-4">
                <h2>Data Not Found</h2>
              </div>
            @endif
          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Latest</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">

                @foreach($latest as $blog)
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">{{ $blog->category_name }}</span> <span class="mx-1">&bullet;</span> <span>{{ date("M jS 'y",strtotime($blog->date)) }}</span></div>
                    <h2 class="mb-2"><a href="{{route('blog.details',['slug'=>$blog->slug])}}">{{ substr($blog->title,0,30) }}</a></h2>
                    <span class="author mb-3 d-block">{{ $blog->author_name }}</span>
                  </div>
                  @endforeach

                </div> <!-- End Popular -->

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Video</h3>
              <div class="video-post">
                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('frontEnd') }}/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Video -->

            <div class="aside-block">
              <h3 class="aside-title">Categories</h3>
              <ul class="aside-links list-unstyled">
              @foreach($categories as $category)
                <li><a href="{{ route('blog.category',['catId'=>$category->id]) }}"><i class="bi bi-chevron-right"></i>  {{ $category->category_name }}</a></li>
              @endforeach
              </ul>
            </div><!-- End Categories -->

            <div class="aside-block d-none">
              <h3 class="aside-title">Tags</h3>
              <ul class="aside-tags list-unstyled">
                <li><a href="category.html">Business</a></li>
                <li><a href="category.html">Culture</a></li>
                <li><a href="category.html">Sport</a></li>
                <li><a href="category.html">Food</a></li>
                <li><a href="category.html">Politics</a></li>
                <li><a href="category.html">Celebrity</a></li>
                <li><a href="category.html">Startups</a></li>
                <li><a href="category.html">Travel</a></li>
              </ul>
            </div><!-- End Tags -->

          </div>

        </div>
      </div>
    </section>
@endsection