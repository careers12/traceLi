@extends('layouts.app')
@section('content')
  <div class="contact">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Contact Us</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Traceline appreciates your interest,Thank you.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-7">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51626.70886405715!2d-0.22105001589576345!3d5.597715470419004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra!5e0!3m2!1sen!2sgh!4v1582348927419!5m2!1sen!2sgh"  width="100%" height="380" frameborder="0" style="border:0" ></iframe>
      </div>
    </div>

    <div class="contact-info">
      <div class="col-md-5">
        <h2>We Are TRACELINE</h2>
        <h3>That Inspires Our Customers & Clients</h3>
        <p>Use the contact options below or Complete the form to get in touch with our customer support.</p>
        <ul>
          <li><i class="fa fa-home fa-2x"></i> Accra, Ghana</li>
          <li><i class="fa fa-phone fa-2x"></i> +233 30 29 54815</li>
          <li><i class="fa fa-envelope fa-2x"></i> traceline@email.com</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contact-form">
    <div class="container">
     
        <div class="col-md-12">
          <div id="sendmessage">
          
          </div>
          <!-- <div id="errormessage"></div> -->
          <form action="#" method="" role="form" class="">
            <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="lname" id="lname" placeholder="Your Last Name" data-rule="lname" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit"  class="btn btn-primary btn-lg" style="background-color:#C0392B;">Send Message</button></div>
          </div>
          </form>
        </div>
      </div>  
  </div>
  @endsection