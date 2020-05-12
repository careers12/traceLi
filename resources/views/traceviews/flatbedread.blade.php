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
        <img src="{{asset('assettrace/images/slider/tras.jpg')}}" class="img-responsive" width="400px;" />
      </div>

      <div
        class="col-lg-6 wow fadeInLeft text-center"
        data-wow-offset="0"
        data-wow-delay="0.5s"
      >
        <h4>Flatbed Truck</h4>
        <p>
          Whether you need a step deck trailer for oversize loads or you need heavy haul shipping for overweight shipments, we can help. We offer unmatched convenience to our customers through our standard flatbed trailers which come in a wide variety of sizes and dimensions. We provide customers with tracking information for their shipment.
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