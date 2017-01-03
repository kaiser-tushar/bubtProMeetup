@extends('layouts.profile')

@section('content')
<style type="text/css">
    .img-circle {
    border-radius: 50%;
    height: 200px; 
    width: 200px;
}
/*.btn-file{
    border: 0px;
}*/
</style>
    <!-- Header -->

    <!-- Contact Section -->
    <section id="eidtProfile">
        <div class="container">
            <div class="row">
                <div class="row text-center">
                    <img class='img-circle' src='data:{{$user_image_info["mime_type"]}};base64,{{base64_encode($user_image_info["img_file"])}}'/>
                </div>
                <div class="row control-group">
                     <div class="form-group">
                        <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 text-center">
                                   <label class="btn btn-xs btn-default btn-file">
                                        Change Profile Picture <input type="file" style="display: none;" name="image">
                                    </label>
                                    <button id="upload" type="submit" class="btn btn-success btn-xs" style="display: none;">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <h2>{{  $profile['name'] }}'s PROFILE</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" action="{{url('/profile/update')}}" method="POST" id="contactForm" novalidate>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                             <label>Name</label>
                                <input type="text" class="form-control" value="{{  $profile['name'] }}" autofocus="autofocus" placeholder="Name" id="name" name="name" required="required">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mobile Number</label>
                                <input type="tel" class="form-control" value="{{  $profile['mobile'] }}" placeholder="Mobile Number" name="mobile" id="mobile" required="required">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Present Address</label>
                                <input type="tel" class="form-control" value="{{  $profile['present_address'] }}" placeholder="Present Address" name="present_address" id="present_address" required="required">
                            </div>
                        </div>
                   
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Organization Name</label>
                                <input type="text" class="form-control" value="{{  $work['organization_name'] }}" placeholder="Organization Name" name="organization_name" id="organization_name" required="required">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Designation</label>
                                <input type="text" class="form-control" value="{{  $work['designation'] }}" placeholder="Designation" name="designation" id="designation" required="required">
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                               <button type="submit" class="btn btn-success btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    <script type="text/javascript" src="/js/profile.js"></script>

@endsection