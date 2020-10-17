<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'downloadCv']]);
    }

    /*
    Eger loading examples 

    $books = App\Book::with(['author: id, name, email', 'author.contacts', 'author.publishers'])->get();
    $books = App\Book::with(['author: id, name, email' => function ($query) {
                                          $query->where('title', 'like', '%first%');
                                     }, 'email', 'author.contacts', 'author.publishers'])->get();
    
    $posts = Post::withCount([
    'comments',
    'comments as active_comments' => function (Builder $query) {
        $query->where('approved', 1);
    }
    ])->get();
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$profile =  Profile::where('email', 'alamin.cse15@gmail.com')->with('experiences')->first();

        $profile =  cache()->remember('profile', 60 * 60 * 24, function () {
            return Profile::where('email', 'alamin.cse15@gmail.com')->with('experiences')->first();
        });

        //dd($profile->experiences);
        return view('profile', compact('profile'));
    }

    public function indexAdmin()
    {

        $profiles = Profile::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        //dd($profiles);

        return view('admin.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = Profile::where('user_id', auth()->user()->id)->get();
        if ($profiles->count() > 0) {
            return redirect(route('profiles.index'))->with('error', 'Profile already added!');
        }
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

        //cv upload
        $cvFile = $request->file('cv_file');
        $cvFileName = md5($request->phone . $request->email) . '.' . $cvFile->getClientOriginalExtension();
        $request->cv_file->move(public_path('/assets/docs/'), $cvFileName);
        $profile->cv_file = $cvFileName;


        //we can also upload file using the following way
        //$request->logo->storeAs('docs', $cvFileName); //  it will move the file to   /storage/app/docs folder
        //better explanation is given below
        //#https://quickadminpanel.com/blog/file-upload-in-laravel-the-ultimate-guide/ 


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

        $profile->picture_about             = $aboutPictureName;
        $profile->linkedin_profile_path     = $request->linkedin_profile_path;
        $profile->github_profile_path       = $request->github_profile_path;
        $profile->twitter_profile_path      = $request->twitter_profile_path;
        $profile->about_info                = trim($request->about_info);
        $profile->profile_title             = $request->profile_title;
        $profile->profile_meta              = $request->profile_meta;
        $profile->profile_meta_descriptions = $request->profile_meta_descriptions;

        //search engine optimization internal meta image upload using intervention image
        if ($request->hasFile('smo_image')) {
            $smoImageFile = $request->file('smo_image');
            $smoImageName = md5($request->cv_name) . '.' . $smoImageFile->getClientOriginalExtension();
            Image::make($smoImageFile)->save(public_path('/assets/images/') . $smoImageName);

            $profile->smo_image = $smoImageName;
        }

        $profile->user_id = auth()->user()->id;

        $profile->save();

        return redirect(route('profiles.index'))->with('created', 'User profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('admin.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profile)
    {
        //dd($request->all());

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

        //cv upload
        if ($request->hasFile('cv_file')) {
            //delete previous file 
            $pathToCvFile =  public_path('/assets/docs/') . $profile->cv_file;

            if (file_exists($pathToCvFile)) {
                $deleteCvFile = unlink($pathToCvFile);

                if ($deleteCvFile) {
                    $cvFile = $request->file('cv_file');
                    $cvFileName = md5($request->phone . $request->email) . '.' . $cvFile->getClientOriginalExtension();
                    $request->cv_file->move(public_path('/assets/docs/'), $cvFileName);
                    $profile->cv_file = $cvFileName;
                } else {
                    return redirect(route('profiles.index'))->with('error', 'Profile CV couldnot delete');
                }
            } else {

                $cvFile = $request->file('cv_file');
                $cvFileName = md5($request->phone . $request->email) . '.' . $cvFile->getClientOriginalExtension();
                $request->cv_file->move(public_path('/assets/docs/'), $cvFileName);
                $profile->cv_file = $cvFileName;
            }
        }

        //we can also upload file using the following way
        //$request->logo->storeAs('docs', $cvFileName); //  it will move the file to   /storage/app/docs folder
        //better explanation is given below
        //#https://quickadminpanel.com/blog/file-upload-in-laravel-the-ultimate-guide/ 


        //cover picture upload using intervention image
        if ($request->hasFile('picture_cover')) {
            $pathToPictureCoverFile =  public_path('/assets/images/') . $profile->picture_cover;

            if (file_exists($pathToPictureCoverFile)) {
                $deletePictureCoverFile = unlink($pathToPictureCoverFile);
                if ($deletePictureCoverFile) {
                    $coverImageFile = $request->file('picture_cover');
                    $coverFileName = md5($request->phone) . '.' . $coverImageFile->getClientOriginalExtension();
                    Image::make($coverImageFile)->save(public_path('/assets/images/') . $coverFileName);
                    $profile->picture_cover =  $coverFileName;
                } else {
                    return redirect(route('profiles.index'))->with('error', 'Profile cover picture couldnot delete');
                }
            } else {
                $coverImageFile = $request->file('picture_cover');
                $coverFileName = md5($request->phone) . '.' . $coverImageFile->getClientOriginalExtension();
                Image::make($coverImageFile)->save(public_path('/assets/images/') . $coverFileName);
                $profile->picture_cover =  $coverFileName;
            }
        }


        //about section image upload using intervention image
        if ($request->hasFile('picture_about')) {

            $pathToPictureAboutFile =  public_path('/assets/images/') . $profile->picture_about;

            if (file_exists($pathToPictureAboutFile)) {
                $deletePictureAboutFile = unlink($pathToPictureAboutFile);

                if ($deletePictureAboutFile) {
                    $aboutPictureFile = $request->file('picture_about');
                    $aboutPictureName = md5($request->email) . '.' . $aboutPictureFile->getClientOriginalExtension();
                    Image::make($aboutPictureFile)->save(public_path('/assets/images/') . $aboutPictureName);
                    $profile->picture_about             = $aboutPictureName;
                } else {
                    return redirect(route('profiles.index'))->with('error', 'Profile about picture couldnot delete');
                }
            } else {
                $aboutPictureFile = $request->file('picture_about');
                $aboutPictureName = md5($request->email) . '.' . $aboutPictureFile->getClientOriginalExtension();
                Image::make($aboutPictureFile)->save(public_path('/assets/images/') . $aboutPictureName);
                $profile->picture_about             = $aboutPictureName;
            }
        }

        $profile->linkedin_profile_path     = $request->linkedin_profile_path;
        $profile->github_profile_path       = $request->github_profile_path;
        $profile->twitter_profile_path      = $request->twitter_profile_path;
        $profile->about_info                = trim($request->about_info);
        $profile->profile_title             = $request->profile_title;
        $profile->profile_meta              = $request->profile_meta;
        $profile->profile_meta_descriptions = $request->profile_meta_descriptions;

        //search engine optimization internal meta image upload using intervention image
        if ($request->hasFile('smo_image')) {

            $pathToSmoImageFile =  public_path('/assets/images/') . $profile->smo_image;

            if (file_exists($pathToSmoImageFile)) {
                $deleteSmoImageFile = unlink($pathToSmoImageFile);
                if ($deleteSmoImageFile) {
                    $smoImageFile = $request->file('smo_image');
                    $smoImageName = md5($request->cv_name) . '.' . $smoImageFile->getClientOriginalExtension();
                    Image::make($smoImageFile)->save(public_path('/assets/images/') . $smoImageName);
                    $profile->smo_image = $smoImageName;
                } else {
                    return redirect(route('profiles.index'))->with('error', 'Profile smo picture couldnot delete');
                }
            } else {

                $smoImageFile = $request->file('smo_image');
                $smoImageName = md5($request->cv_name) . '.' . $smoImageFile->getClientOriginalExtension();
                Image::make($smoImageFile)->save(public_path('/assets/images/') . $smoImageName);
                $profile->smo_image = $smoImageName;
            }
        }


        $profile->user_id = auth()->user()->id;

        //dd($profile);

        $profile->save();

        return redirect(route('profiles.index'))->with('created', 'User profile updated successfully');
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

    public function downloadCv($profile_id = null)
    {
        $profile =  Profile::find($profile_id);

        if (!is_null($profile)) {

            $pathToFile =  public_path('/assets/docs/') . $profile->cv_file;

            if (file_exists($pathToFile)) {

                // $headers = ['Content-Type: application/pdf'];

                $CV_NAME = Str::slug($profile->cv_name . '_cv', '_');

                return response()->download($pathToFile, $CV_NAME);
            }

            return null;
        }

        return null;
    }
}
