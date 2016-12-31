<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center intro-text">
                    <h2>Registration</h2>
                     <h4 class="skills" id="countdown"></h4>
                    <hr class="star-primary">
                    <form name="register_yourself" id="registrationForm" novalidate action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="reg_name" required data-validation-required-message="Please enter your name." name="name">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="reg_email" required data-validation-required-message="Please enter your email address." name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contact Number</label>
                                <input type="tel" class="form-control" placeholder="Phone/Cell Number to contact you" id="reg_phone" name="reg_phone" required data-validation-required-message="Please enter your contact number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Present Address</label>
                                <textarea rows="5" class="form-control" placeholder="Present Address" id="present_address" name="present_address" ></textarea>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <div class="input-group date" data-provide="datepicker" >
                                    <input type="text" class="form-control" placeholder="Date of Birth" id="DOB" name="DOB" data-date-format="dd-mm-yyyy">
                                    <div class="input-group-addon" style="background: white;border: 0px white;">
                                    <!-- <span class="glyphicon glyphicon-th"></span> -->
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group form-controls">
                            <br>
                                <select class="form-control" id="program" name="program">
                                    <option value="0">Select Program</option>
                                    <option value="Day">Day</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <br>
                        </div>
                        <div class="row control-group">
                            <br>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <select class="form-control" id="department" name="department">
                                    <option value="0">Select Department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="BBA">BBA</option>
                                    <option value="Textile">Textile</option>
                                </select>
                            </div>
                            <br>
                        </div>
                        <div class="row control-group">
                            <br>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <select class="form-control" id="intake" name="intake">
                                    <option value="0">Select Intake</option>
                                    @for($i = 1;$i <= 30 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <br>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Student ID Card Number</label>
                                <input type="number" class="form-control" placeholder="Give us your Student ID card Number to verify that you are from BUBT" id="id_no" name="id_no" required data-validation-required-message="Student ID card Number">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Organization Name</label>
                                <input type="text" name="org_name" class="form-control" placeholder="Current Organization you are working for" id="org_name" >
                               
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Designation</label>
                                <input type="text" class="form-control" placeholder="Current Designation in your Organization" id="designation" name="designation">
                               
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Website</label>
                                <input type="text" class="form-control" placeholder="Have your own website or blog?" id="website" name="website">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Facebook ID</label>
                                <input type="text" class="form-control" placeholder="Let us know you.Wanna share your facebook profile with us?" id="fb_id" required data-validation-required-message="Please enter your name." name="fb_id">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control" name="password" required data-validation-required-message="Please provide a password to enter in this application." placeholder="Password to create an account">
                                  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-validation-required-message="Please confirm your password to enter in this application." placeholder="Confirm Password to create an account">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="sbmt">Register Me</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>