@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <!-- Header -->


    <section id="register">
   @include('partials.register')
   </section>


    <script type="text/javascript" src="/js/register.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    function getTime(){
        var date1 = new Date();
    var date2 = new Date("02/05/2017");
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    $("#countdown").html(diffDays+" days remaining")
    }
    getTime();
          // $("#countdown").countdown(new Date("02/10/2017"), function(event) {
          //   $(this).html(event.strftime('%-m month%!m %-d day%!d %-H hour%!H remaining'));
          // });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
                var color =['#B0171F','#DC143C','#8B8386','#EE3A8C','#DA70D6',
                '#8B4789','#FF00FF','#7A378B','#9400D3','#8A2BE2'
                ];
                setInterval(function(){
                    getTime();
                    var val = color[Math.floor((Math.random() * 10)+1)%10];
                    // console.log(val);
                    $("#countdown").attr('style', "color:"+val);
                }, 5000);
                // setTimeout(colorChange(),2000);
        });
    </script>
@endsection
