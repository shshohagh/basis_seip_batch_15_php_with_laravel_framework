<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontEnd') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('frontEnd') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontEnd') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontEnd') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontEnd') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('frontEnd') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontEnd') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{ asset('frontEnd') }}/assets/css/variables.css" rel="stylesheet">
  <link href="{{ asset('frontEnd') }}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
@include('frontEnd.include.header')
  <!-- End Header -->

  <main id="main">

@yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontEnd.include.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontEnd') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontEnd') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontEnd') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontEnd') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontEnd') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontEnd') }}/assets/js/main.js"></script>
  <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>

<script>

    // ! Get Blog ID
    $('.details').click(function(){
       var blogId = $(this).attr('id');
      // ! Get Data By Blog ID
      $.ajax({
        method:"GET",
        url: "api/details/"+blogId,
        dataType:"JSON",
        // ! Set Data To Modal For Quick View
        success:function(data){
          $('#title').text(data.title);
          $('#description').text(data.description.substr(0,100));
          $('#image').attr('src',data.image);
          $('#catName').text(data.category_name);
          $('#authImage').attr('src',data.author_image);
          $('#authName').text(data.author_name);
          $('#date').text(data.date);
          $('#detailsModal').modal('show');
          $('#slug').attr('href','{{url('/blog-details')}}/'+data.slug);
        }

      }); // * End ajax
    }); // * End Click

</script>

<!-- Modal -->
<div class="modal fade" id="detailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="title">Blog Title</h1>
        <button type="button" class="btn-close d-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row mb-3">
              <div class="col-md-6">
                    <span id="catName">Category Name</span> <span class="mx-1">&bullet;</span> <span id="date">Date</span>
              </div>
              <div class="col-md-6">
                  <img src="" alt="" id="authImage" class="rounded-circle" height="30" width="30"> &nbsp;
                  <span id="authName" align="right">Author Name</span>
              </div>
          </div>
          <div class="row mb-3">
            <img src="" alt="" id="image" class="img-fluid" height=""><br><br>
          </div>
          <div class="row mb-3">
            <p id="description">Description</p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a id="slug" href="#!"><button type="button" class="btn btn-success">Details</button></a>
      </div>
    </div>
  </div>
</div>

</body>

</html>