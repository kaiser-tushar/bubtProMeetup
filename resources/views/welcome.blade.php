@extends('layouts.master')

@section('content')
<style>
.name{
  font-size: 30px!important;
}
</style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <!-- Header -->
    <header  style="background-color: #0f0f19;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12" >
                    <!-- <div class="intro-text">
                       <span class="name">BUBT IT Professionals Meetup 2017</span>
                       <hr class="star-light" style="max-width: 100%">
                       <span class="skills">BUBT Professionals is a platform where students of BUBT connect with each other and help to build an awesome community.BUBT IT Professional Meetup 2017 is going to happen on 10th February, 2017 </span>
                   </div> -->
                    <img class="img-responsive" src="img/cover_photo.jpg" alt="" width="100%">

                </div>
            </div>
        </div>
    </header>
    <header style="background-color: white;color: black;">
     <div class="container" style="padding-top: 50px!important;">
         <div class="row">
           <div class="intro-text">
              <span class="name"> Who we are </span>
              <hr class="star-primary" >
               <span class="skills text-justify">
                We are some of the professionals of BUBT who are dedicated to building our coummunity more stronger and our network more powerful. We believe that Working together will help us to make an awesome carrier.
               </span>
            </div>
         </div>
     </div>
     <div class="container" style="padding-top: 0px!important;">
         <div class="row">
            <div class="intro-text">
             <span class="name"> What we are planning for</span>
             <hr class="star-primary" >
             <span class="skills text-justify">
                    BUBT Professionals is a platform where students of BUBT connect with each other and help to build an awesome community. Aim of BUBT Professionals is to make a strong professionals community.
                    <br/><br/>BUBT It Professionals Meetup, 2017 in association with BUBT IT Club and BUBT Alumni Association, will happen on 10th February, 2017 at our own campus auditorium. If you want to participate in BUBT IT Professionals Meetup to meet with the Professionals, you have to join first.
             </span><br/>
             <br/>
             <small>***Date might need to be changed for maximum gathering. So, please stay connected and updated informations will be notified through email. </small>
             <br/><small>***6th Semester or above (for Day program students only, for evening program students there is no restriction of semester) and all ex-students of CSE/CSIT and other IT professionals of other departments can join the event . </small>
           </div>

         </div>
         <br>
         <a href="{{url('register')}}" class="btn btn-success btn-lg" id="sbmt">Join The Event</a>
     </div>

        <div class="container"  style="padding-top: 0px!important;">
            <div class="row">
            <div class="intro-text">
             <span class="name"> How to confirm registration</span>
             <hr class="star-primary" >
             <span class="skills text-justify">
                    After successfull <a href="{{url('register')}}" class="" id="sbmt">registration</a>, you will get payment option in login page. You can do BKash or give money in hand to authorized members. After payment, you need to fill the Payment form for confirmation. Admin will validate the payment and confirm your registration. You will get Successful accepted email after confirmation.
                    <br/><br/>Each can bring 1 (one) or 2 (two) guests but must have to be family member, for example Father, Mother, Brother, Sister, Wife and Children. But, if guest age is above 4 years old, you have to pay for the guest.
                    <br/><br/>Please do not hasitate to contact with us through <a href="https://www.facebook.com/events/331897373841027/" title="BUBT IT Professionals Meetup, 2017" >Facebook Event page</a>.
             </span>
           </div>

         </div>
        </div>

  </header>

@endsection
