@extends('layouts.profile')

@section('content')

    <!-- Header -->

    <!-- Contact Section -->
    <?php foreach ($profile as $profile_data) {
         ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{  $profile_data['name'] }}'s PROFILE</h2>
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
                                <h5>name: {{  $profile_data['name'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <h5>email: {{  $profile_data['email'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h5>mobile: {{  $profile_data['mobile'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h5>presant address: {{  $profile_data['present_address'] }}</h3>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h5>date of birth: {{  $profile_data['dob'] }}</h3>
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
        <?php } ?>
    </section>
    <script type="text/javascript" src="/js/profile.js"></script>

@endsection