<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Http\Requests\ExperienceRequest;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [/* 'index', 'downloadCv' */]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences =  Experience::orderBy('date_from', 'desc')->get();

        //dd($profile);
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceRequest $request)
    {

        //dd($request->all());

        $experience = new Experience();
        $experience->company_name = $request->company_name;
        $experience->company_email = $request->company_email;
        $experience->company_phone = $request->company_phone;
        $experience->company_location = $request->company_location;
        $experience->company_city = $request->company_city;
        $experience->company_country = $request->company_country;
        $experience->company_website = $request->company_website;
        $experience->project_website = $request->project_website;
        $experience->designation = $request->designation;
        $experience->job_type = $request->job_type;
        $experience->date_from = $request->date_from ? date('Y-m-d', strtotime($request->date_from)) : '';
        $experience->date_to = $request->date_to ? date('Y-m-d', strtotime($request->date_to)) : null;
        $experience->job_responsibility = $request->job_responsibility;
        $experience->work_stack = $request->work_stack;
        $experience->profile_id = 1;
        $experience->user_id = auth()->user()->id;

        $experience->save();

        return redirect(route('experiences.index'))->with('created', 'Experience added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceRequest $request, Experience $experience)
    {
        //dd($request->all());
        $experience->company_name = $request->company_name;
        $experience->company_email = $request->company_email;
        $experience->company_phone = $request->company_phone;
        $experience->company_location = $request->company_location;
        $experience->company_city = $request->company_city;
        $experience->company_country = $request->company_country;
        $experience->company_website = $request->company_website;
        $experience->project_website = $request->project_website;
        $experience->designation = $request->designation;
        $experience->job_type = $request->job_type;
        $experience->date_from = $request->date_from ? date('Y-m-d', strtotime($request->date_from)) : $experience->date_from;
        $experience->date_to = $request->date_to ? date('Y-m-d', strtotime($request->date_to)) : $experience->date_to;
        $experience->job_responsibility = $request->job_responsibility;
        $experience->work_stack = $request->work_stack;
        $experience->profile_id = 1;
        $experience->user_id = auth()->user()->id;

        $experience->save();

        return redirect(route('experiences.index'))->with('created', 'User experience updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
