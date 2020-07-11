
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>traceline</title>

    <!-- Bootstrap -->
    <link href="{{asset('assettrace/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assettrace/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('assettrace/css/jquery.bxslider.css')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assettrace/images/about/track-bird-3.png')}}">
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assettrace/css/isotope.css')}}"
      media="screen"
    />
    <link rel="stylesheet" href="{{asset('assettrace/css/animate.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('assettrace/js/fancybox/jquery.fancybox.css')}}"
      type="text/css"
      media="screen"
    />
    <link href="{{asset('assettrace/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{asset('assettrace/css/style.css')}}" rel="stylesheet" />

  </head>
  <body>
    <header>

      <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navigation">
          <div class="container">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target=".navbar-collapse.collapse"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand">
                <a href="{{route('welcome')}}"><img src="{{asset('assettrace/images/about/image6.jpeg')}}" alt="" style="margin-top:-7px;" class="img-responsive" /></a>
              </div>
            </div>

            <div class="navbar-collapse collapse navbar-update">
              <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation">
                    <a href="{{route('welcome')}}" class="">Home</a>
                  </li>
                  <li role="presentation">
                    <a href="{{route('page.service')}}">Services</a>
                  </li>
                  <li role="presentation"><a href="{{route('page.track')}}">Track</a></li>
                  <li role="presentation">
                    <a href="{{route('page.about')}}">About</a>
                  </li>
                  <li role="presentation">
                    <a href="{{route('page.contact')}}">Contact</a>
                  </li>
                  <!-- <li role="presentation"><a href="{{route('page.account')}}">My ACCOUNT</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')

    <footer>
      <div class="footer">
        <div class="container">
          <div
            class="col-md-4 wow fadeInUp"
            data-wow-offset="0"
            data-wow-delay="0.2s"
          >
            <h2 style="color:Red;">TRACELINE</h2>
            <p style="color:#ffff;">Traceline is an enterprising transpotort and haulage facilitator, committed connecting customers with their goods in transit.
            </p>

            <ul class="social-network">
              <li>
                <a href="#" data-placement="top" title="Facebook"
                  ><i class="fa fa-facebook fa-1x"></i
                ></a>
              </li>
              <li>
                <a href="#" data-placement="top" title="Twitter"
                  ><i class="fa fa-twitter fa-1x"></i
                ></a>
              </li>
              <li>
                <a href="#" data-placement="top" title="Linkedin"
                  ><i class="fa fa-linkedin fa-1x"></i
                ></a>
              </li>
              <li>
                <a href="#" data-placement="top" title="Pinterest"
                  ><i class="fa fa-pinterest fa-1x"></i
                ></a>
              </li>
              <li>
                <a href="#" data-placement="top" title="Google plus"
                  ><i class="fa fa-google-plus fa-1x"></i
                ></a>
              </li>
            </ul>
          </div>

          <div
            class="col-md-4 wow fadeInUp"
            data-wow-offset="0"
            data-wow-delay="0.4s"
          >
            <h3>Legal</h3>
            <ul>
              <li>Terms Of Use</li>
              <hr />
              <li>Privacy Policy</li>
              <hr />
              <li>Fraud Prevention</li>
            </ul>
          </div>

          <div
            class="col-md-4 wow fadeInUp"
            data-wow-offset="0"
            data-wow-delay="0.6s"
          >
            <h3>CONTACT INFO</h3>
            <ul>
              <li><i class="fa fa-home fa-2x"></i> Accra, Ghana</li>
              <hr />
              <li><i class="fa fa-phone fa-2x"></i> +233 30 29 54815</li>
              <hr />
              <li><i class="fa fa-envelope fa-2x"></i> traceline@email.com</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              &copy; Traceline 2020
              <div class="credits">
                <a href=""></a>
              </div>
            </div>
            <div class="col-md-6">
              <ul class="pull-right">
                  <li role="presentation">
                    <a href="{{route('welcome')}}" class="">Home</a>
                  </li>
                  <li role="presentation">
                    <a href="{{route('page.service')}}">Services</a>
                  </li>
                  <li role="presentation"><a href="{{route('page.track')}}">Track</a></li>
                  <li role="presentation">
                    <a href="{{route('page.about')}}">About</a>
                  </li>
                  <li role="presentation">
                    <a href="{{route('page.contact')}}">Contact</a>
                  </li>
                  <!-- <li role="presentation"><a href="{{route('page.account')}}">My ACCOUNT</a></li> -->
                </ul>
            </div>
          </div>
          <div class="pull-right">
            <a href="#home" class="scrollup"
              ><i class="fa fa-angle-up fa-3x"></i
            ></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assettrace/js/jquery-2.1.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assettrace/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assettrace/js/wow.min.js')}}"></script>
    <script src="{{asset('assettrace/js/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assettrace/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assettrace/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assettrace/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assettrace/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assettrace/js/functions.js')}}"></script>
    <script>
      wow = new WOW({}).init();
    </script>
  </body>
</html>
