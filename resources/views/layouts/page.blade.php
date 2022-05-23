<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <title>ABBAYA CHOWDARY KOTARU - Denduluru</title>

  @livewireStyles
</head>

<body>
<div id="navbar-page" class="sticky-top">
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container">
        <a class="navbar-brand text-white text-uppercase fw-bold" href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home <br> <span class="sub">Main
                  Page</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                data-hover="dropdown" data-delay="1000" data-close-others="false">
                My Constituency <br> <span class="sub">Get More Details</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" tabindex="-1" href="{{route('development')}}">Development Activities</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" tabindex="-1" href="{{route('welfair')}}">Welfare Activities</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Events <br> <span class="sub">Upcoming Events</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('goodmorning')}}">GADAPA GADAPAKU MANA PRABHUTVAM </a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('skill')}}">Skill up Denduluru</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('jagan')}}">Jagan Maata - Abbayya Bata</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Get In Touch <br> <span class="sub">Contact Us</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li> --}}
                <li><a class="dropdown-item" href="{{route('registration')}}">Contact Us</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex">
            <i class="fa-brands fa-facebook-f text-white me-2 fs-4"></i>
            <i class="fa-brands fa-twitter text-white me-2 fs-4"></i>
            <i class="fa-brands fa-youtube text-white me-2 fs-4"></i>
            <i class="fa-brands fa-instagram text-white me-2 fs-4"></i>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>
  


  {{$slot}}


  <footer id="footer" class="pt-3 pt-md-5 bg-dark">
    <div class="container border-bottom">
      <div class="row g-3">
        <div class="col-md-12">
          <div class="text-center">
            <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
            
            {{-- <a href="#" class="text-white text-decoration-none"><i
                class="fa fa-phone-volume text-white me-2"></i>+91 </a> --}}
          </div>
        </div>
        <div class="col-md-4 align-self-center">
          <div class="d-flex justify-content-center custom">
            <div>
              <a href="#" class="text-white text-decoration-none"><i
                class="fa fa-map text-white me-2 fs-4"></i>MLA- Denduluru Camp Office,<br/>
                Plot No :22, NCC Canteen Road,<br/>Mothevari Thota, Eluru - 534 002</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 align-self-center">
          <div class="d-flex justify-content-center custom1">
            <div>
              <a href="#" class="text-white text-decoration-none"><i
                class="fa fa-phone-volume text-white me-2 fs-4"></i>dendulurumla64@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 align-self-center">
          <div class="d-flex justify-content-center custom2">
            <div>
              <a href="#" class="text-white text-decoration-none"><i
                class="fa fa-envelope text-white me-2 fs-4"></i>dendulurumla64@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-transparant">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('skill')}}">Skill Up Denduluru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('registration')}}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        {{-- <div class="col-md-2 col-6">
          <div class="py-3 py-md-0">
            <h3 class="fs-5 text-white">My Constituency</h3>
            <ul class="text-white">
              <li>Development Activities</li>
              <li>Welfair Activities</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="py-3 py-md-0">
            <h3 class="fs-5 text-white">Events</h3>
            <ul class="text-white">
              <li>Good Morning Denduluru</li>
              <li>Skill Up Denduluru</li>
              <li>Jagan Maata - Abbaya Bata</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <h3 class="fs-5 text-white text-center">Social Connect</h3>
          <div class="text-center text-md-start">
            <i class="fa-brands fa-facebook-f text-white ms-2 border rounded p-3"></i>
            <i class="fa-brands fa-twitter text-white ms-2 border rounded p-3"></i>
            <i class="fa-brands fa-youtube text-white ms-2 border rounded p-3"></i>
            <i class="fa-brands fa-instagram text-white ms-2 border rounded p-3"></i>
          </div>
        </div> --}}
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="mb-0 py-2 text-center text-white">© Copyrights ABBAYA CHOWDARY KOTARU 2021.</p>
        </div>
        <div class="col-md-4">
          <p class="text-white mb-0 py-2 text-center">Design and Developed by <a href="http://logodesignerbangalore.com/" target="_blank"
            class="copyright-link text-decoration-none text-white">LDCB</a></p>
        </div>
        <div class="col-md-4">
          <div class="text-center text-md-end">
            <i class="fa-brands fa-facebook-f text-white ms-2 border rounded p-1 mt-2"></i>
            <i class="fa-brands fa-twitter text-white ms-2 border rounded p-1 mt-2"></i>
            <i class="fa-brands fa-youtube text-white ms-2 border rounded p-1 mt-2"></i>
            <i class="fa-brands fa-instagram text-white ms-2 border rounded p-1 mt-2"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  {{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/all.min.js')}}"></script>
  {{-- <script src="{{asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script> --}}
  <script src="{{asset('assets/js/jquery.bootstrap-dropdown-hover.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  @livewireScripts
</body>

</html>