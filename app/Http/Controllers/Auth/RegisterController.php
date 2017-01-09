<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Profile;
use App\Models\Work;
use App\Models\EducationalInfo;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'reg_phone' => 'required|regex:/^(?:\+?88)?01[15-9]\d{8}$/',
            'program'   => 'required',
            'department'    => 'required',
            'id_no' => 'required',
            'website'   => 'url',
            'fb_id' =>'url|regex:/(https?:\/\/)?([\w\.]*)facebook\.com\/([a-zA-Z0-9\._]*)$/'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $json_arr = [ 'website' => $data['website'], 'fb' => $data['fb_id']];
       $user_instance =(User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]));
         Profile::create([
            'user_id' => $user_instance['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['reg_phone'],
            'present_address' => $data['present_address'],
            'dob' => $data['DOB'],
            'user_status' => 1,
            'socials' => json_encode($json_arr),
            'user_type' => 3,
        ]);
         Work::create([
            'user_id' => $user_instance['id'],
            'organization_name' => $data['org_name'],
            'designation' =>  $data['designation'],
        ]);
         EducationalInfo::create([
            'user_id' => $user_instance['id'],
            'program' => $data['program'],
            'department' =>  $data['department'],
            'intake' =>  $data['intake'],
            'student_id' =>  $data['id_no'],
        ]);
         return $user_instance;
    }
}
