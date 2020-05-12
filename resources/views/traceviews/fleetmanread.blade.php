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
        <h4>Fleet Management</h4>
        <p>
          Truck owners and individual investors who would like a steady stream of income with an invaluable peace of mind from daily operational and systematic hurdles can work with us to manage their trucks. 
          Over the years, we have worked with several interested parties and managed their trucks giving them guaranteed regular income. We have the best team and a robust business line to ensure trucks are well handled to bring you efficiency and value for money. Speak to us for your own package at your own terms.
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