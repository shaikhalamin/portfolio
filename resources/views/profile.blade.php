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
                <p class="mt-2 mb-2">
                    <i class="fa fa-envelope-o mr-1" aria-hidden="false" style="font-size: 18px; color:rgb(255, 255, 255)"></i>
                    <span class="text-white font-18">{{ $profile ? $profile->email : '' }}</span>
                </p>
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
                <div class="text-justify ml-3 font-15">
                    <div class="card">
                        <div class="card-body">
                            {!! $profile ? $profile->about_info : '' !!}
                        </div>
                    </div>
                </div>
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

<div class="row bg-light mb-5">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4 mt-4 text-center"><span class="border-bottom-3">Experience</span></h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 bg-dark">
                            <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @if(isset($profile->experiences) && $profile->experiences->count() > 0)
                                @foreach($profile->experiences as $key=>$experience)
                                @if($experience)

                                @php

                                $colorArray = ['success','primary','info'];

                                @endphp
                                <button class="mt-2 mb-1 btn btn-sm btn-outline-{{ isset($colorArray[$key]) ? $colorArray[$key] : $colorArray[0] }} text-white {{ $experience->date_to ? '' : 'active show' }}" id="v-pills-{{ strtolower(substr($experience->designation,0,2).substr($experience->company_name,0,3)) }}-tab" data-toggle="pill" href="#v-pills-{{ strtolower(substr($experience->designation,0,2).substr($experience->company_name,0,3)) }}" role="tab" aria-controls="v-pills-{{ strtolower(substr($experience->designation,0,2).substr($experience->company_name,0,3)) }}" aria-selected="{{ $experience->date_to ? 'true' : 'false' }}">
                                    <span class="font-14"><b>{{ $experience->designation }}</b></span> - <span class="font-13"><a class="text-white" target="_blank" href="{{ $experience->company_website }}"><b>{{ $experience->company_name }}</b></a></span>
                                    <span class="float-right text-white"><i class="fa fa-angle-double-right " aria-hidden="true"></i></span>
                                </button>

                                @endif
                                @endforeach
                                @endif

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="tab-content border-left" id="v-pills-tabContent">

                                @if(isset($profile->experiences) && $profile->experiences->count() > 0)
                                @foreach($profile->experiences as $key=>$experience)
                                @if($experience)
                                <div class="tab-pane fade {{ $experience->date_to ? '' : 'active show' }}" id="v-pills-{{ strtolower(substr($experience->designation,0,2).substr($experience->company_name,0,3)) }}" role="tabpanel" aria-labelledby="v-pills-{{ strtolower(substr($experience->designation,0,2).substr($experience->company_name,0,3)) }}-tab">
                                    <div class="card">
                                        <div class="card-header" style="background-color: rgb(255, 255, 255);">
                                            <h6><a href="{{ $experience->company_website }}"><b>{{ $experience->company_name }}</b> <span class="text-dark">{{ $experience->company_city }} - {{ $experience->company_country }}</span></a></h6>
                                            <p class="font-15"><span><b>{{ $experience->designation }} </b></span> | {{ $experience->date_from ? date('F Y',strtotime($experience->date_from)) : '' }} - {{ $experience->date_to ? date('F Y',strtotime($experience->date_to)):'PRESENT' }}</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="font-14">
                                                {!! $experience->job_responsibility !!}
                                            </div>
                                            <ul class="nav justify-content-center">
                                                @php

                                                $colorArray = ['primary','info','success','warning','info','success','dark','danger'];
                                                shuffle($colorArray);

                                                @endphp

                                                @foreach(explode(',',$experience->work_stack) as $key=>$stack)
                                                <li class="nav-item mr-1">
                                                    <p class="font-13 "><b><span class="badge badge-{{ $colorArray[$key] }}">{{ $stack }}</span></b></p>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection