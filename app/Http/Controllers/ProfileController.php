<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Models\EducationalInfo;
use App\Models\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $id = Auth::user()->id;
        $profile = Profile::where('user_id',$id)->first() ;
        $work = Work::where('user_id',$id)->first() ;
        $educational_info = EducationalInfo::where('user_id',$id)->first() ;

		$user_image_info = $this->getProfilePic($profile);    
       
        return view('profile.index')->with(compact('profile','work','educational_info','user_image_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::user()->id;
        $profile = Profile::where('user_id',$id)->first() ;
        $work = Work::where('user_id',$id)->first() ;

        $user_image_info = $this->getProfilePic($profile);
        return view('profile.edit')->with(compact('profile','work','user_image_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $requestData= $request->all();
        if(!empty($requestData['name'] && $requestData['mobile'] && $requestData['present_address'] && $requestData['organization_name'] && $requestData['designation']))
         {
            $id = Auth::user()->id;
            $profile = Profile::where('user_id',$id)->first() ;
            $work = Work::where('user_id',$id)->first() ;
            $profile->name= $requestData['name'];
            $profile->mobile= $requestData['mobile'];
            $profile->present_address= $requestData['present_address'];
            $work->organization_name= $requestData['organization_name'];
            $work->designation= $requestData['designation'];
            $profile->update();
            $work->update();
            return redirect('/home');
         }
         else
         {
            return redirect('profile/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function imageUpload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = Auth::user()->id;
        $profile = Profile::where('user_id',$id)->first() ;
         if(!empty($profile['photo_path'])){
           $path = public_path('img').'/users/'.$profile['photo_path']; 
           if(file_exists($path)){
            unlink($path);
           }
         }
        
        $imageName =  $id.'_'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img/users'), $imageName);

        DB::table('profiles')->where('user_id', $id)->update(['photo_path' => $imageName]);

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }
    /**
     * @parameters profile data of perticular User
     */
    protected function getProfilePic($profile){
	     $path =public_path('img').DIRECTORY_SEPARATOR.'profile.png';
         $url = '/img/'.'profile.png';
        if(!empty($profile['photo_path'])){
            $path = public_path('img').DIRECTORY_SEPARATOR.'users'.DIRECTORY_SEPARATOR.$profile['photo_path'];
            $url = '/img/users/'.$profile['photo_path'];
        }
        
        if(!file_exists($path)){
              $path =public_path('img').DIRECTORY_SEPARATOR.'profile.png';
              $url = '/img/'.'profile.png';
        }
        $mime_type =  File::extension($path);
        $file = file_get_contents($path);
        return ['path' => $path,'url' => $url, 'mime_type' => $mime_type ,'img_file' => $file];
    }
}
