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
    <?php
         $path =public_path('img').'/'.'profile.png';
         $url = '/img/'.'profile.png';
        if(!empty($profile['photo_path'])){
            $path = public_path('img').'/users/'.$profile['photo_path'];
            $url = '/img/users/'.$profile['photo_path'];
        }
        
        if(!file_exists($path)){
              $path =public_path('img').'/'.'profile.png';
              $url = '/img/'.'profile.png';
        }
        // print_r($profile_data['photo_path']);die;
         ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="row text-center">
                    <img class='img-circle' src='data:{{mime_content_type($path)}};base64,{{base64_encode(file_get_contents($path))}}'/>
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
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>name: {{  $profile['name'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <h5>email: {{  $profile['email'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h5>mobile: {{  $profile['mobile'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h5>present address: {{  $profile['present_address'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>program: {{  $educational_info['program'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>department: {{  $educational_info['department'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>intake: {{  $educational_info['intake'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>Student ID Card Number: {{  $educational_info['student_id'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>Organization Name: {{  $work['organization_name'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>Designation: {{  $work['designation'] }}</h3>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="button" id="edit" class="btn btn-success btn-lg">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    <script type="text/javascript" src="/js/profile.js"></script>

@endsection