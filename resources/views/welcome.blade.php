@extends('layouts.app')
    @section('content')
    <div class="container-fluid slider">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 wow fadeInLeft text-center text-style"
              data-wow-offset="0"
              data-wow-delay="0.5s"
            >
              <div class="slider-text">
                <p class="slid">Traceline is an enterprising </br>
                  transport and haulage facilitator, committed </br> connecting customers with their</br>goods in transit.</p>
              </div>

            </div>
            <div
              class="col-md-6  wow fadeInLeft text-center text-style"
              data-wow-offset="0"
              data-wow-delay="0.5s"
            >
              <div class="slider-text_1">
                <form class="" action="#" method="" >
                  <input
                    class="form-control form-input"
                    type="text"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="input-group-append form-input-1">TRACK</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-center text-center_b  ">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>WHAT WE HAVE FOR OUR CLIENT</h3>
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
              tonne artics with curtain-sided or flat-bed trailers.
               <!-- <a href="genhauread.html" title="" class="readmore-btn"
              >Read more</a> -->
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
              <!-- <a href="condisread.html" title="" class="readmore-btn"
              >Read more</a> -->
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
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid service_t">
      <div class="container ">
        <div class="box-1">
          <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
            <div class="col-sm-4">
              <div class="serve-image">
                <div class="serve-image-1">
                  <img src="{{asset('assettrace/images/slider/refrig.jpg')}}" class="img-responsive" />
                </div>
                <div class="serve-image-text">
                  <h5>Dry Van</h5>
                  <p>
                    Our range of 5-30 tonnes dry vans provides 
                    clients with different sizes for specific quantum of their goods.
                    These trucks moves across the length and breadth of the nation.

                  </p>
                </div>
                <div class="serve-image-text_1">
                  <a href="{{route('page.dryvanread')}}" title="" class="readmore-btn"
                    >Read more <i class="fa fa-angle-right"></i
                  ></a>
                  <div class="location_map">
                    <i
                      class="fa fa-plus"
                      style="color:#ffff !important;margin-bottom:-10px !important;"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="wow fadeInRight"
            data-wow-offset="0"
            data-wow-delay="1.2s"
          >
            <div class="col-sm-4">
              <div class="serve-image">
                <div class="serve-image-1">
                  <img src="{{asset('assettrace/images/slider/tras.jpg')}}" class="img-responsive" />
                </div>
                <div class="serve-image-text">
                  <h5>Flatbed</h5>
                  <p>
                    We offer unmatched convenience services to our customers through our 
                    standard flatbed trailers which come in a wide variety of sizes and dimensions.
                  </p>
                </div>
                <div class="serve-image-text_1">
                  <a href="{{route('page.flatbedread')}}" title="" class="readmore-btn"
                    >Read more <i class="fa fa-angle-right"></i
                  ></a>
                  <div class="location_map">
                    <i
                      class="fa fa-plus"
                      style="color:#ffff !important;margin-bottom:-10px !important;"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="wow fadeInRight"
            data-wow-offset="0"
            data-wow-delay="1.6s"
          >
            <div class="col-sm-4 ">
              <div class="serve-image">
                <div class="serve-image-1">
                  <img src="{{asset('assettrace/images/slider/trucks.jpg')}}" class="img-responsive"/>
                </div>
                <div class="serve-image-text">
                  <h5>Fleet and Technical Facilities</h5>
                  <p>
                    We have an extensive range of trucks, trailers and vans in different body types and sizes. Some operate at the disposal of our customers for contract distribution.
                  </p>
                </div>
                <div class="serve-image-text_1">
                  <a href="{{route('page.fleetecfacread')}}" title="" class="readmore-btn"
                    >Read more <i class="fa fa-angle-right"></i
                  ></a>
                  <div class="location_map">
                    <i
                      class="fa fa-plus"
                      style="color:#ffff !important;margin-bottom:-20px !important;"
                    ></i>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="features">
      <div class="container">
        <div
          class="col-lg-6 col-md-6  wow fadeInRight"
          data-wow-offset="0"
          data-wow-delay="0.5s"
        >
          <img
            src="{{asset('assettrace/images/slider/hom.jpg')}}"
            class="img-responsive"
          />
        </div>

        <div
          class="col-lg-6 col-md-6 wow fadeInLeft text-center text-center_1"
          data-wow-offset="0"
          data-wow-delay="0.5s"
        >
          <h4 style="color:#000;">Heavy Haulage</h4>
          <p style="color:#000;">
            Use our heavy haulage solutions to move your oversized freight,
           equipment or major infrastructure projects across town, or intercity.
            Our skilled team will safely move your deliverables to its destination.
          </p>
          <!-- <p style="color:#000;">
            Bras urna felis accumsan at ultrde cesid posuere
          </p> -->
        </div>
      </div>
    </div>
    <div class="features">
      <div class="container">
        <div
        class="col-lg-6 col-md-6 wow fadeInLeft text-center text-center_1"
        data-wow-offset="0"
        data-wow-delay="0.5s"
      >
        <h4 style="color:#000;">International Handling and Distribution</h4>
        <p style="color:#000;">
          Thinking of how to bring in your purchases made ouside Ghana? Traceline offers consolidation, handling and distribution of packages from anywhere in the world to Ghana. Whether they are for personal, customers or internal business use, we have a very robust system with the most competitive rates to cater for you.
        </p>
      </div>
        <div
          class="col-lg-6 col-md-6  wow fadeInRight"
          data-wow-offset="0"
          data-wow-delay="0.5s"
        >
          <img
            src="{{asset('assettrace/images/slider/truc.png')}}"
            class="img-responsive"
          />
        </div>

        
      </div>
    </div>

    <div class="main-feature">
      <div class="container">
      <div class="row">
        <div
          class="col-md-4 wow fadeInUp"
          data-wow-offset="0"
          data-wow-delay="0.3s"
        >
          <div class="media">
            <div class="media-left">
              <i class="fas fa-tablet-alt fa-3x"></i>
            </div>

            <div class="media-body">
              <h4 class="media-heading" style="color:#000;">TraceApp</h4>
              <p>
                Traceline comes with mobile application that would facilitate your transaction. It is simple and easy to use. It’s also available on both ISO and Android. Let’s try it out.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="media">
            <div class="media-left">
              <i class="fas fa-map-marker-alt fa-3x"></i>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color:#000;">Book A Truck</h4>
              <p>
                Convey your goods nationwide at your comfort zone by booking a truck using our mobile application. It is safe and convenient.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
          <div class="media">
            <div class="media-left">
              <i class="far fa-credit-card fa-3x"></i>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color:#000;">
                Make Payment
              </h4>
              <p>
                Do all payment through our mobile application. All anticipated fraudulent actions are considered.
                Make your payments with no fear. You are secured. 
              </p>
            </div>
          </div> 
        </div>
        </div>
      </div>

      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Traceline Transportation LTD</h2>
        </div>
        <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Let Your Trust Ride With US.</p>
        </div>
      </div>
    </div>

    <div class="about-us">
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
            <h2>The Team</h2>
          </div>
          <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
            <div class="col-md-3">
              <img src="{{asset('assettrace/images/about/image1.jpeg')}}" alt="" />
              <h3>Terry Aboagye</h3>
              <p>
                CEO
              </p>
            </div>
          </div>
          <div
            class="wow fadeInRight"
            data-wow-offset="0"
            data-wow-delay="0.3s"
          >
            <div class="col-md-3">
              <img src="{{asset('assettrace/images/about/image1.jpeg')}}" alt="" />
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
                Financial Manager
              </p>
            </div>
          </div>
          <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="col-md-3">
              <img src="{{asset('assettrace/images/about/image1.jpeg')}}" alt="" />
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
    