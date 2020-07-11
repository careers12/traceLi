@extends('layouts.app')
@section('content')

  <div class="contact">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Get An Account</h3>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Traceline appreciates your interest,Thank you.</p>
        </div>
      </div>
    </div>
  </div>

  

  <div class="contact-form">
    <div class="container">
     
        <div class="col-md-12">
          <div id="sendmessage">
        
          </div>
          <!-- <div id="errormessage"></div> -->
          <form action="contact.php" method="POST" role="form" class="">
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