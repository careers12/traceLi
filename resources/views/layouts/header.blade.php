@section('header')
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
                <a href="index.html"><img src="{{asset('assettrace/images/about/image6.jpeg')}}" alt="" style="margin-top:-7px;" class="img-responsive" /></a>
              </div>
            </div>
            @yield('content')
            <div class="navbar-collapse collapse navbar-update">
              <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation">
                    <a href="index.html" class="active">Home</a>
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
                  <li role="presentation"><a href="{{route('page.account')}}">My ACCOUNT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
@endsection