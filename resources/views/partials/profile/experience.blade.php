<div class="row bg-light">
    <div class="container mb-2">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 mt-4 text-center"><span class="border-bottom-3">Experience</span></h4>
            </div>
        </div>
        <div class="row">
            @if(isset($profile->experiences) && $profile->experiences->count() > 0)
            @foreach($profile->experiences as $key=>$experience)
            @if($experience)
            <div class="col-md-6 mb-5">
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
                    <div class="card-footer bg-light">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->linkedin_profile_path : '/' }}"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->github_profile_path : '/' }}"><i class="fa fa-github-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
                            <li class="nav-item"><a class="btn btn-sm" target="_blank" href="{{ $profile ? $profile->twitter_profile_path : '/' }}"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 25px; color: rgb(0, 0, 0);"></i></a></li>
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