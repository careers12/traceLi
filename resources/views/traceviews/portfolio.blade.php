@extends('layouts.app')
@section('content')
  <div class="container-fluid about-trace">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="service-text">
              <h4>ABOUT  TRACELINE </h4>
              <p>
                Traceline is committed to connecting customers with their goods in transit
              </p>
              <p>we’ll find an option for you which is second to none.</p>
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
        <h4>Who We Are</h4>
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
  <div class="about-mission" style="padding-bottom:73px;">
    <div class="container">
      <div class="col-lg-6 wow fadeInLeft text-center" data-wow-offset="0" data-wow-delay="0.5s">
        <h4>What We Do</h4>
        <p>
          Our primary activity is to ensure that the goods and packages of our clients get to their intended destination.
          As a company with 10 years experience, we attract and retain customers by providing top notch transportation solutions
          and fostering profitable, disciplined culture of safety, service and trust.We also invest in new technology, putting you in control with real-time security information which enhance traceability of packages and trucks when there is a case of theft.

        </p>
        
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
        <img
          src="{{asset('assettrace/images/about/traab.jpg')}}"
          class="img-responsive"
        />
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
        <div
          class="wow bounceInDown"
          data-wow-offset="0"
          data-wow-delay="0.3s"
        ></div>
        <div
          class="wow bounceInDown"
          data-wow-offset="0"
          data-wow-delay="0.6s"
        >
          <h2>MEET OUR TEAM</h2>
        </div>
        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="col-md-3">
            <img src="images/about/image1.jpeg" alt="" />
            <h3>Terry Aboagye</h3>
            <p>
              CEO
            </p>
          </div>
        </div>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="{{asset('assettrace/images/about/image1.jpeg')}}" alt=""  />
            <h3>Abera Olivia</h3>
            <p>
              General Manager
            </p>
          </div>
        </div>
        <div
          class="wow fadeInRight"
          data-wow-offset="0"
          data-wow-delay="0.6s"
        >
          <div class="col-md-3">
            <img src="{{asset('assettrace/images/about/image1.jpeg')}}" alt="" />
            <h3>Raymod Kojo Kutortse</h3>
            <p>
              Chief Financial Officer
            </p>
          </div>
        </div>

        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="images/about/image1.jpeg" alt="" />
            <h3>Isaac Essiful</h3>
            <p>
              Operational Manager
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection