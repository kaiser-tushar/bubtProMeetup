<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Models\EducationalInfo;
use App\Models\Work;
use Illuminate\Support\Facades\DB;

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

       
        return view('profile.index')->with(compact('profile','work','educational_info'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
