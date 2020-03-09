@extends('Front_End.layout.master')
@section('contact_status','active')
         <!-- Contact Us -->
@section('content')
         <div class="container contact-container">
          <h3 class="contact-header">Contact Us</h3 class="contact-header">
          <p class="contact-sub-text">Feel Free to shout us by feeling the contact form or visiting our social network sites like <a href="javascript:void(0)">Facebook</a>, <a href="javascript:void(0)">Linkedin</a>, <a href="javascript:void(0)">Twitter</a>, <a href="javascript:void(0)">Google</a></p>
          <h3 class="text-center" style="color:green">
               <?php $message = Session::get('message');
                   if(isset($message)){
                       echo $message;
                       Session::put('message','');
                   }
               ?>
           </h3>
            {!!Form::open(['url' => '/contact','method' => 'post','class'=>'review-form form-group field-radius is-empty','enctype'=>'multipart/form-data'])!!}
              <div class="row">
              <div class="col-md-6">
                <label for="broker-name">First Name</label>
                 <p class="form-group no-m">
                    <input type="text" class="form-control form-custom" placeholder="Enter Your First Name" name="name" required >
                 </p>
                 <label for="broker-name">Email Name</label>
                 <p class="form-group no-m">
                    <input type="email" class="form-control form-custom" placeholder="Enter Your Email" name="email" required >
                 </p>
              </div>
              <div class="col-md-6">
                <label for="broker-name">Last Name</label>
                 <p class="form-group no-m">
                    <input type="text" class="form-control form-custom" placeholder="Enter Your Last Name" name="Last_Name" required >
                 </p>
                 <label for="broker-name">Phone</label>
                 <p class="form-group no-m"> 
                    <input type="text" class="form-control form-custom" placeholder="Enter Your Phone Number" name="Phone" required >
                 </p>
              </div>
              <div class="col-md-12">
                <label for="broker-name">Message</label>
                <p class="form-group no-m">
                    <textarea class="form-control form-custom" rows="6" placeholder="Enter Your Message" name="message" required></textarea>
                 </p>

                 <label for="broker-name">What is 4+3 ? <span class="color-primary">(Simple Spam Checker)</span></label>
                 <p class="form-group no-m">
                    <input type="text" class="form-control form-custom" placeholder="Enter Your Answer" name="answer" required >
                 </p>
                 <p class="no-m text-right"><button type="submit" class="btn btn-raised btn-primary-light no-m">Submit</button></p>
              </div>
            </div>
            {!!Form::close()!!}
          </div>
         </div>
         @endsection
         <!-- Contact Us Review -->
        
         
        
