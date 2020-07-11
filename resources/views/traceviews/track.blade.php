@extends('layouts.app')
@section('content')
  <div class="container-fluid track-item">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="service-text">
              <h4>TRACK YOUR PACKAGE</h4>
              <p>
                 Traceline provides both web and mobile app platform to track the status of your goods.
              </p>
              <p>Get notified when a pickup is arranged or delivered.  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="track-form">
    <div class="container">
      <div class="row">
      <div class="col-lg-2"></div>
        <div class="col-lg-8 ">
          <div class="track-form-holder">
            <form class="" action="" method="">
              <input
                class="form-control form-input  "
                type="text"
                placeholder="Enter your track ID"
              />
              <button class="input-group-append form-input-1">TRACK</button>
            </form>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
  <div class="track-mobile-app">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft text-center" data-wow-offset="0" data-wow-delay="0.5s">
        <div class="media">
          <div class="media-left">
            <i class="far fa-user fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Account</h4>
            <p>
              Sign up to create a personal or coperate account to facilitate haulage.
               Account records all transactions for easy accessibility. 
            </p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <i class="fas fa-map-marker-alt fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Book Truck</h4>
            <p>
              Our robust system allows you to book a truck by simply selecting your preferred truck and providing pick-up/delivery points. It’s that simple. 
            </p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <i class="fas fa-phone-volume fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Support</h4>
            <p>
              Make all your encounters known by our support unit.The suppport unit of traceline is keen to provide help to our customers.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
        <img
          src="{{asset('assettrace/images/track/Tracker.png')}}"
          class="img-responsive"
        />
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft text-center " data-wow-offset="0" data-wow-delay="0.5s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-thumbtack fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading"> Tracking</h4>
            <p>
              Confidently know where your package or 
              goods are at any point in time with our unique tracking number generated when you book a truck.
            </p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <i class="far fa-credit-card fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" >Payments</h4>
            <p>
              All payment models are available to pay for our 
              service to you. Be it bank transfer, mobile money or other digital wallets.
            </p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <i class="fas fa-history fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading">History</h4>
            <p>
               All transactions can be viewed from just one tab.
               This allows our clients to follow all their transactions with us and manage them more efficiently.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="portfolio">
    <div class="container">
      <div class="col-lg-12">
        <div class="row">
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->
  <div class="about-us_team">
    <div class="container">
      <div class="text-center">
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-12">
            
            <h3>Traceline Transportation LTD</h3>
            <p>
              Let Your Trust Ride With US.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection