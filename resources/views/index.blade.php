<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="MyLink - Connect audiences to all of your content with just one link">
  <meta name="author" content="MrJim Development">
  <title>
    {{ $data->name }}
  </title>
  <!-- Favicon -->
  <link href="{{ url('/') }}/img/favicon.png" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="{{ url('/') }}/css/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/css/main.css">

</head>

<body>

  <!-- Main content -->
  <div class="main-content">
    <div id="particles-js"></div>

    <!-- Page content -->

    <div class="container-fluid pb-5 pt-7">

      <!-- Blobs Background -->
      <img src="{{ url('/') }}/img/blobs/blob-1.svg" class="blob blob-md" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-2.svg" class="blob blob-lg" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-3.svg" class="blob blob-lg" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-3.svg" class="blob blob-xs" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-4.svg" class="blob blob-xs" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-4.svg" class="blob blob-xs" alt="blobs">
      <img src="{{ url('/') }}/img/blobs/blob-2.svg" class="blob blob-xs" alt="blobs">
      <!-- End Blobs Background-->


      <div class="col-xl-4 mb-5 mx-auto">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3">
              <div class="card-profile-image">
                <a href="#">
                  <img src="{{ url('/') }}/storage/{{ $data->logo }}" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 ">
            <div class="d-flex justify-content-end">
              <a href="#" class="btn btn-sm btn-info float-right btn-rounded text-white" id="content_section" onClick="showContact()">{{__("Əlaqə")}}</a>
            </div>
          </div>
          <div class="card-body pt-0 pt-md-4 mt-md-5">
            <div class="text-center">
              <h3>
                {{ $data->name }}
              </h3>
              <hr>
              <div class="h5 font-weight-300">
                <i class="fas fa-map-marker-alt mr-2"></i>
                <a href="{{ $data->youtube }}" target="_blank" style="color: white;">{{ $data->location }}</a>
              </div>
              <div class="h5 font-weight-300">
                <i class="fas fa-phone mr-2"></i>
                 <a href="tel:{{ $data->phone }}" target="_blank" style="color: white">{{ $data->phone }}</a>
              </div>
              <div class="h5 font-weight-300">
                <i class="fas fa-mail-bulk mr-2"></i>
                <a href="mailto:{{ $data->email }}" target="_blank" style="color: white">{{ $data->email }}</a>
              </div>
              <hr>
              <div class="h5 mt-4">
                {!! $data->body !!}
              </div>
              <hr class="my-4" />
            </div>

            <div id="content_section">
              <div class="profile-card-social pb-3" >
                <a href="{{ $data->facebook }}" class="profile-card-social__item btn-facebook" target="_blank">
                  <i class="fab fa-facebook-square icon"></i> Facebook
                </a>

                <a href="{{ $data->instagram }}" class="profile-card-social__item btn-instagram" target="_blank">
                  <i class="fab fa-instagram icon"></i> Instagram
                </a>

                <a href="#" class="profile-card-social__item btn-custom" target="_blank">
                  <i class="fas fa-tint icon"></i>
                  Tiktok
                </a>

                <a href="{{ $data->twitter }}" class="profile-card-social__item btn-twitter" target="_blank">
                  <i class="fab fa-twitter-square icon"></i> Twitter
                </a>


                <a href="{{ $data->linkedin }}" class="profile-card-social__item btn-behance" target="_blank">
                  <i class="fab fa-linkedin icon"></i> Linkedin
                </a>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JS Script -->
  <script src="{{ url('/') }}/js/particles.min.js"></script>
  <script src="{{ url('/') }}/js/main.js"></script>
</body>
</html>