@extends('layouts.portfolio')


@section('title')
{{ $profile ? $profile->profile_title : 'Shaikh Al Amin | Senior Software Engineer ' }}
@endsection

@section('meta_description')
{{ $profile ? $profile->profile_meta_descriptions : 'Shaikh Al Amin | Senior Software Engineer | Fullstack Developer' }}
@endsection

@section('meta_keyword')
{{ $profile ? $profile->profile_meta : 'Shaikh Al Amin,Senior Software Engineer,Fullstack Developer' }}
@endsection

@section('author')
{{ $profile ? $profile->full_name : 'Shaikh Al Amin' }}
@endsection

@section('facebook_meta')
<meta property="og:title" content="{{ $profile ? $profile->profile_title : 'Shaikh Al Amin | Senior Software Engineer ' }}" />
<meta property="og:description" content="{{ $profile ? $profile->profile_meta_descriptions : 'Shaikh Al Amin | Senior Software Engineer | Fullstack Developer' }}" />
<meta property="og:image" content="{{ $profile ? asset('assets/images/').'/'.$profile->smo_image : asset('assets/images/shaikh_alamin.jpg') }}" />
<meta property="og:url" content="{{ url('/') }}" />
@endsection



@section('content')

<div class="jumbotron" id="particles-js" style="border-radius: 0px; background-image:url('/assets/img/bgParticle.gif')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-white"><b><span class="i-am">I'm</span> {{ $profile ? $profile->full_name : '' }}</b></h1>
                <h2 class="text-white" style="font-size: 1.125rem;">{{ $profile ? $profile->designation .' | '.$profile->specialized_at : '' }}</h2>
                <div class="row">
                    <div class="col-md-6 offset-md-3 mb-3 mt-2"><a href="{{ route('profiles.download_cv',['profile_id'=> $profile ? $profile->id : 0]) }}" class="btn btn-sm btn-outline-info text-white" target="_blank" rel="noopener noreferrer">Download CV</a><button type="button" class="btn btn-sm btn-outline-danger text-white ml-2 custom-btn-warning">Hire Me</button></div>
                </div>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->linkedin_profile_path : '/' }}"><i class="fa fa-linkedin-square" aria-hidden="false" style="font-size: 25px; color:rgb(255, 255, 255)"></i></a></li>
                    <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->github_profile_path : '/' }}"><i class="fa fa-github-square " aria-hidden="true" style="font-size: 25px;color:rgb(255, 255, 255) "></i></a></li>
                    <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->twitter_profile_path : '/' }}"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 25px; color:rgb(255, 255, 255)"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="">
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-6"><img src="{{ $profile ? asset('assets/images/').'/'.$profile->picture_about : asset('assets/images/shaikh_alamin.jpg')  }}" class="img-fluid" alt="shaikh_image"></div>
            <div class="col-md-6 border-left about-info">
                <h4 class="text-justify ml-3 mb-3 text-dark"><span class="border-bottom-3">About</span> Me</h4>
                <div class="text-justify ml-3 font-15">{!! $profile ? $profile->about_info : '' !!}</div>
                <p class="text-justify ml-3 font-15"></p>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <ul class="nav ml-3">
                            <li class="nav-item"><a href="{{ route('profiles.download_cv',['profile_id'=> $profile ? $profile->id : 0]) }}" class="btn btn-sm custom-btn-info text-white" target="_blank" rel="noopener noreferrer">Download CV</a></li>
                            <li class="nav-item"><button type="button" class="btn btn-sm custom-btn-warning ml-2">Hire Me</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row bg-light">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 mt-4 text-center"><span class="border-bottom-3">Experience</span></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(255, 255, 255);">
                        <h6><a href="https://www.wipro.com/"><b>Wipro Limited</b> <span class="text-dark">Dhaka-Bangladesh</span></a></h6>
                        <p class="font-15"><span><b>Senior Software Engineer </b></span> | SEPTEMBER 2019 - PRESENT</p>
                    </div>
                    <div class="card-body">
                        <ul class="font-14">
                            <li class="mt-1 mb-1">Adding new features,system design and implementation to an ERP project using Agile Scrum.</li>
                            <li class="mt-1 mb-1">Provide REST API to Android and IOS Team.</li>
                            <li class="mt-1 mb-1">Develop admin UI for system support.</li>
                            <li class="mt-1 mb-1">Solve real-time problems occuring in production related to UI, Backend, and Databases.</li>
                        </ul>
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="btn btn-sm" href="/"><b>CAKE <span class="text-danger">PHP</span></b></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><b>My<span class="text-warning">SQL</span></b></a></li>
                            <li class="nav-item"><a class="btn btn-sm text-info" href="/"><b>REST</b></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><span class="bg-warning text-white" style="padding: 3px; border-radius: 5px;"><b>Javascript</b></span></a></li>
                            <li class="nav-item"><a class="btn btn-sm " href="/"><span class="bg-primary text-white" style="padding: 3px; border-radius: 5px;"><b>JQuery</b></span></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><span class="text-white" style="background-color: rgb(86, 61, 124); padding: 3px; border-radius: 5px;"><b>Bootstrap</b></span></a></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="btn btn-sm" href="https://www.linkedin.com/in/shaikh-al-amin/"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="https://github.com/shaikhalamin"><i class="fa fa-github-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="https://twitter.com/shaikhalamin015"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(255, 255, 255);">
                        <h6><a href="https://teamamericany.com/index.php/home/start"><b>Teamnet(USA BASED)</b> <span class="text-dark">Dhaka-Bangladesh</span></a></h6>
                        <p class="font-15"><span><b>Software Engineer</b></span> | NOVEMBER 2016 - AUGUST 2019</p>
                    </div>
                    <div class="card-body">
                        <ul class="font-14">
                            <li class="mt-1 mb-1">Design &amp; Rebuild old ecommerce travel booking web application - <a href="https://volatour.com/">Volatour</a></li>
                            <li class="mt-1 mb-1">Integrate SOAP API with other Backend service.</li>
                            <li class="mt-1 mb-1">Develop admin UI for system support.</li>
                            <li class="mt-1 mb-1">Solve real-time problems occuring in production related to UI, Backend, and Databases.</li>
                        </ul>
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="btn btn-sm" href="/"><b><span class="text-danger">Laravel</span></b></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><b>My<span class="text-warning">SQL</span></b></a></li>
                            <li class="nav-item"><a class="btn btn-sm text-info" href="/"><b>SOAP</b></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><span class="bg-warning text-white" style="padding: 3px; border-radius: 5px;"><b>Javascript</b></span></a></li>
                            <li class="nav-item"><a class="btn btn-sm " href="/"><span class="bg-primary text-white" style="padding: 3px; border-radius: 5px;"><b>JQuery</b></span></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="/"><span class="text-white" style="background-color: rgb(86, 61, 124); padding: 3px; border-radius: 5px;"><b>Bootstrap</b></span></a></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="btn btn-sm" href="https://www.linkedin.com/in/shaikh-al-amin/"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="https://github.com/shaikhalamin"><i class="fa fa-github-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" href="https://twitter.com/shaikhalamin015"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection