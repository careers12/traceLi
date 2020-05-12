@extends('layouts.app')
@section('content')
  <div class="container-fluid service">
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
  <div class="container" style="padding-bottom: 40px;">
    <div class="text-center text-center_b">
      <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h3>MAJOR SERVICES</h3>
      </div>
      <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
        <h4 style="color:#000;"></h4>
      </div>
    </div>

    <div class="box">
      <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
        <div class="col-sm-4">
          <i class="fas fa-trailer fa-3x"></i>
                    <h4>General Haulage</h4>
          <p>
            Our fleet of trucks offers a wide range of flexible haulage options.Each of our 
            vehicles are road worthy coupled with experienced drivers which helps protect your goods 
            Vehicles include: Transit Vans, curtain-sided trucks (5/15/20/25/30 metric tonnes), 44 
            tonne artics with curtain-sided or flat-bed trailers. <a href="{{route('page.genhauread')}}" title="" class="readmore-btn"
            >Read more</a>
          </p>
        </div>
      </div>
      <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
        <div class="col-sm-4">
          <i class="fas fa-truck-moving fa-3x"></i>
          <h4>Contract Distribution</h4>
          <p>
            Traceline is experienced in contract distribution to support your 
            sales and marketing needs. We supply vehicles of all sizes 
            and also qualified drivers which enhance day-to-day distribution of services.Our 
            contract distribution offers each company an all-encompassing benefit such as 
            financial, brand and operational. 
            <a href="{{route('page.condisread')}}" title="" class="readmore-btn"
            >Read more</a>
          </p>
        </div>
      </div>
      <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
        <div class="col-sm-4">
          <i class="fa fa-laptop fa-3x"></i>
          <h4>Fleet Management</h4>
          <p>
            Truck owners and individual investors who would like a steady stream of income with an invaluable peace of mind from daily operational and systematic hurdles can register with us.
            Over the years, we have worked with several interested third parties and managed their trucks, giving them guaranteed regular income. 
            <a href="{{route('page.fleetmanread')}}" title="" class="readmore-btn"
            >Read more</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="services-app">
    <div class="container">
      <div class="text-center">
        <div class="services-box">
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <h2>TRACKING APP</h2>
          </div>
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
            <p></p>
          </div>
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
            <img src="{{asset('assettrace/images/services/app-tablet-blue.png')}}" alt="App Tablet" class="img-responsive tablet-black style-dependent inviewport animated delay2 hiddenthis visiblethis fadeInUp" data-effect="fadeInUp">
          </div>
          </div>
        </div>
      </div>
    </div>
    
  <div class="service_main-feature">
    <div class="container">
    <div class="row">
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-truck-loading fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Heavy Haulage</h4>
            <p>
              Use our heavy haulage solutions to move your oversized freight,
           equipment or major infrastructure projects across town, or intercity.</br>
           <a href="{{route('page.heahauread')}}" title="" class="readmore-btn"
              >Read more </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-shipping-fast fa-2x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Package Handling and Delivery </h4>
            <p>
              Thinking of how to bring in your purchases made ouside Ghana? Traceline offers consolidation,
               handling and distribution of packages from anywhere in the world to Ghana. 
               <a href="{{route('page.phdread')}}" title="" class="readmore-btn"
              >Read more </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-laptop-house fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Fleet and Technical Facilities</h4>
            <p>
              We have an extensive range of trucks, trailers and vans in different body types 
              and sizes. Some operate at the disposal of our customers for contract distribution.</br>
              <a href="{{route('page.fleetecfacread')}}" title="" class="readmore-btn"
              >Read more </a>
            </p>
          </div>
        </div>
      </div>
     
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-truck fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">
              Dry Van Truck
            </h4>
            <p>
              Our range of 5-30 tonnes dry vans provides clients with 
              different sizes for specific quantum of their goods. These trucks 
              moves across the length and breadth of the nation.</br>
              <a href="{{route('page.dryvanread')}}" title="" class="readmore-btn"
                    >Read more</a>
            </p>
          </div>
        </div> 
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-dolly-flatbed fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">Flatbed Truck</h4>
            <p>
              We offer unmatched convenience services to our customers through our
              standard flatbed trailers which come in a wide variety of sizes and dimensions.</br>
              <a href="{{route('page.flatbedread')}}" title="" class="readmore-btn"
                    >Read more</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
        <div class="media">
          <div class="media-left">
            <i class="fas fa-truck-moving fa-3x"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#000;">
             Refrigerated Truck
            </h4>
            <p>
              Cras urna felis accumsan at ultricesid posuere masa um socisd
              natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea
              dipe.</br>
              <a href="{{route('page.refrigeratedread')}}" title="" class="readmore-btn"
              >Read more </a>
            </p>
          </div>
        </div> 
      </div>
      </div>
    </div>
  </div>
  @endsection