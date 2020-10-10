<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth', ['except' => ['index']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    public function indexAdmin()
    {
        $profiles = Profile::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {

        $profile = new Profile();
        $profile->full_name = $request->full_name;
        $profile->cv_name   = $request->cv_name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->city  = $request->city;
        $profile->country   = $request->country;
        $profile->postal_code   = $request->postal_code;
        $profile->date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
        $profile->cityzenship   = $request->cityzenship;
        $profile->maritial_status   = $request->maritial_status;
        $profile->designation   = $request->designation;
        $profile->specialized_at    = $request->specialized_at;

        //cover picture upload using intervention image
        $coverImageFile = $request->file('picture_cover');
        $coverFileName = md5($request->phone) . '.' . $coverImageFile->getClientOriginalExtension();

        //dd($coverFileName);

        Image::make($coverImageFile)->save(public_path('/assets/images/') . $coverFileName);
        $profile->picture_cover =  $coverFileName;

        //about section image upload using intervention image
        $aboutPictureFile = $request->file('picture_about');
        $aboutPictureName = md5($request->email) . '.' . $aboutPictureFile->getClientOriginalExtension();
        Image::make($aboutPictureFile)->save(public_path('/assets/images/') . $aboutPictureName);

        $profile->picture_about = $aboutPictureName;
        $profile->linkedin_profile_path = $request->linkedin_profile_path;
        $profile->github_profile_path   = $request->github_profile_path;
        $profile->twitter_profile_path  = $request->twitter_profile_path;
        $profile->about_info    = $request->about_info;
        $profile->profile_title = $request->profile_title;
        $profile->profile_meta  = $request->profile_meta;
        $profile->profile_meta_descriptions = $request->profile_meta_descriptions;

        //search engine optimization internal meta image upload using intervention image
        $smoImageFile = $request->file('smo_image');
        $smoImageName = md5($request->cv_name) . '.' . $smoImageFile->getClientOriginalExtension();
        Image::make($smoImageFile)->save(public_path('/assets/images/') . $smoImageName);

        $profile->smo_image = $smoImageName;

        $profile->user_id = auth()->user()->id;

        $profile->save();

        return redirect(route('admin.profile.index'))->with('profile_created', 'User profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
