<div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                    <div class="text-center intro-text">
                        <h2>Registration</h2>
                        <h4 class="skills" id="countdown"></h4>
                        <hr class="star-primary">
                    </div>

                    <form name="register_yourself" id="registrationForm" novalidate action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                @if ($errors->has('name'))
                                    <p class="text-danger">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                                <input type="text" name="name" id="name" class="form-control"  placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email *</label>
                                @if ($errors->has('email'))
                                    <p class="text-danger">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="reg_phone">Your Contact Number *</label>
                                @if ($errors->has('reg_phone'))
                                    <p class="text-danger">
                                        {{ $errors->first('reg_phone') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" name="reg_phone" id="reg_phone" placeholder="Contact Number">
                            </div>

                            <div class="form-group">
                                <label for="present_address">Present Address</label>
                                @if ($errors->has('present_address'))
                                    <p class="text-danger">
                                        {{ $errors->first('present_address') }}
                                    </p>
                                @endif
                                <textarea type="text" class="form-control" name="present_address" id="present_address" placeholder="Contact Number"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="DOB">Date of Birth</label>
                                @if ($errors->has('DOB'))
                                    <p class="text-danger">
                                        {{ $errors->first('DOB') }}
                                    </p>
                                @endif
                                <div class="input-group date" data-provide="datepicker" data-date="{{date('Y-m-d')}}" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control" id="DOB" name="DOB">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="program">Program *</label>
                                @if ($errors->has('program'))
                                    <p class="text-danger">
                                        {{ $errors->first('program') }}
                                    </p>
                                @endif
                                <select class="form-control" id="program" name="program">
                                    <option value="0">Select Program</option>
                                    <option value="Day">Day</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="department">Department *</label>
                                @if ($errors->has('department'))
                                    <p class="text-danger">
                                        {{ $errors->first('department') }}
                                    </p>
                                @endif
                                <select required class="form-control" id="department" name="department">
                                    <option value="0">Select Department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="CSIT">CSIT</option>
                                    <option value="EEE">EEE</option>
                                    <option value="BBA">BBA</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="intake">Intake *</label>
                                @if ($errors->has('intake'))
                                    <p class="text-danger">
                                        {{ $errors->first('intake') }}
                                    </p>
                                @endif
                                <select class="form-control" id="intake" name="intake">
                                    <option value="0">Select Intake</option>
                                    @for($i = 1;$i <= 40 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_no">Student ID Number *</label>
                                @if ($errors->has('id_no'))
                                    <p class="text-danger">
                                        {{ $errors->first('id_no') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" placeholder="Student ID card Number" id="id_no" name="id_no">
                            </div>

                            <div class="form-group">
                                <label for="org_name">Where you work</label>
                                @if ($errors->has('org_name'))
                                    <p class="text-danger">
                                        {{ $errors->first('org_name') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" placeholder="Organization Name" id="org_name" name="org_name">
                            </div>

                            <div class="form-group">
                                <label for="designation">Your Designation</label>
                                @if ($errors->has('designation'))
                                    <p class="text-danger">
                                        {{ $errors->first('designation') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" placeholder="Your Designation" id="designation" name="designation">
                            </div>

                            <div class="form-group">
                                <label for="website">Your Website</label>
                                @if ($errors->has('website'))
                                    <p class="text-danger">
                                        {{ $errors->first('website') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" placeholder="Your Website" id="website" name="website">
                            </div>

                            <div class="form-group">
                                <label for="fb_id">Your Facebook URL</label>
                                @if ($errors->has('fb_id'))
                                    <p class="text-danger">
                                        {{ $errors->first('fb_id') }}
                                    </p>
                                @endif
                                <input type="text" class="form-control" placeholder="Facebook URL" id="fb_id" name="fb_id">
                            </div>

                            <div class="form-group">
                                <label for="password">Password *</label>
                                @if ($errors->has('password'))
                                    <p class="text-danger">
                                        {{ $errors->first('password') }}
                                    </p>
                                @endif
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password *</label>
                                @if ($errors->has('password_confirmation'))
                                    <p class="text-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </p>
                                @endif
                                <input type="password" class="form-control" placeholder="Password" id="password_confirmation" name="password_confirmation">
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(function(){
        $('select').select2();
    })
</script>
