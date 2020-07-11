@extends('layouts.app')
@section('content')
  <div class="container-fluid about-trace">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="service-text">
            <h4>TRACE SERVICES</h4>
            <p>
              Traceline Transportation Ltd offers a comprehensive transportation solution for its clients.
            </p>
            <p>The mission is to be recognized as the leading logistics company by providing unmatched quality service and value to its clients.
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-mission">
    <div class="container">
      <div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
        <img src="{{asset('assettrace/images/about/terr.jpg')}}" class="img-responsive"/>
      </div>

      <div
        class="col-lg-6 wow fadeInLeft text-center"
        data-wow-offset="0"
        data-wow-delay="0.5s"
      >
        <h4>Heavy Haulage</h4>
        <p>
          Traceline is a leading provider of haulage, distribution 
          and logistics services throughout Ghana.With over ten (10) years working experience, having evolved from ‘Rootman transport’, and network of service 
          locations, our experienced and motivated staff combined with modern IT  provides our 
          customers with quality and economic service. We also work to ensure that our customers have absolute peace of 
          mind when entrusting their goods and logistics with us.
        </p>
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
  @endsection