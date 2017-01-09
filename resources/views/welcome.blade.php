@extends('layouts.master')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <!-- Header -->
    <header  style="background-color: #0f0f19;">
        <div class="container" style="padding-top: 180px;">
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

   <section class="container">
       <div class="row">
           <div class="col-md-offset-4 col-md-4 text-center">
               <p align="center" class="text-center">
                   If you want to participate BUBT IT Professionals Meetup and meet with the Professionals then you have to join first.
               </p>

               <a href="{{url('register')}}" class="btn btn-success btn-lg" id="sbmt">Join The Event</a>

           </div>
       </div>
   </section>


    <script type="text/javascript" src="/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/js/register.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $("#countdown").countdown("2017/02/10", function(event) {
            $(this).text(event.strftime('%-m month%!m %-d day%!d %-H hour%!H %M min%!M remaining'));
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var color =['#B0171F','#DC143C','#8B8386','#EE3A8C','#DA70D6',
                '#8B4789','#FF00FF','#7A378B','#9400D3','#8A2BE2'
            ];
            setInterval(function(){
                var val = color[Math.floor((Math.random() * 10)+1)%10];
                // console.log(val);
                $("#countdown").attr('style', "color:"+val);
            }, 5000);
            // setTimeout(colorChange(),2000);
        });
    </script>
@endsection
