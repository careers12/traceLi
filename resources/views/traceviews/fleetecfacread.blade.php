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
        <img src="{{asset('assettrace/images/slider/trucks.jpg')}}" class="img-responsive" width="400px;" />
      </div>

      <div
        class="col-lg-6 wow fadeInLeft text-center"
        data-wow-offset="0"
        data-wow-delay="0.5s"
      >
        <h4>Fleet and Technical Facilities</h4>
        <p>
          We have an extensive range of trucks, trailers and vans in different body types and sizes. Some operate at the disposal of our customers for contract distribution, providing ‘facilitated control’ and promotional opportunities to our clients. We also have a highly motivated team including experienced drivers who are forward thinking with customer satisfaction in mind.
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