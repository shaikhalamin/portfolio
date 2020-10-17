<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profiles = Profile::where('user_id', auth()->user()->id)->with(['experiences'])->orderBy('created_at', 'desc')->first();
        //dd($profiles);
        return view('admin.index', compact('profiles'));
    }
}
