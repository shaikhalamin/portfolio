<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileId = isset(auth()->user()->profile) ? auth()->user()->profile->id : 0;
        $skills =  Skill::where('profile_id', $profileId)->orderBy('created_at', 'desc')->paginate(8);
        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!isset(auth()->user()->profile)) {
            return redirect(route('skills.index'))->with('error', 'Please add your profile first !');
        }
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:25',
            'main_stack' => 'required|max:25',
        ]);

        $skill = new Skill();
        $skill->type = $request->type;
        $skill->functional_type = $request->functional_type;
        $skill->main_stack = $request->main_stack;
        $skill->framework_1 = $request->framework_1;
        $skill->framework_2 = $request->framework_2;
        $skill->framework_3 = $request->framework_3;
        $skill->framework_library = $request->framework_library;
        $skill->profile_id = auth()->user()->profile ? auth()->user()->profile->id : 0;
        $skill->user_id = auth()->user()->id;

        $skill->save();

        return redirect(route('skills.index'))->with('created', 'Skill added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:25',
            'main_stack' => 'required|max:25',
        ]);

        $skill->type = $request->type;
        $skill->functional_type = $request->functional_type;
        $skill->main_stack = $request->main_stack;
        $skill->framework_1 = $request->framework_1;
        $skill->framework_2 = $request->framework_2;
        $skill->framework_3 = $request->framework_3;
        $skill->framework_library = $request->framework_library;
        $skill->profile_id = auth()->user()->profile ? auth()->user()->profile->id : 1;
        $skill->user_id = auth()->user()->id;

        $skill->save();

        return redirect(route('skills.index'))->with('created', 'Skill updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
