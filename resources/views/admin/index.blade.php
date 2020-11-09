@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-2 ">
                            <div class="card" style="width: 100%;">
                                <div class="card-body custom-btn-info">
                                    <h4 class="font-14 text-uppercase text-white font-bold">
                                        <a class="text-white" href="{{ route('profiles.index') }}">
                                            <span class="float-left text-white">
                                                <i class="fa fa-id-badge" aria-hidden="true"></i> Profiles
                                                <span class="badge badge-light ml-1">{{ $profiles ? $profiles->count() : 0 }}</span>
                                            </span>

                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <div class="card-body bg-success">
                                    <h4 class="font-14 text-uppercase text-white font-bold">
                                        <a class="text-white" href="{{ route('experiences.index') }}">
                                            <span class="float-left text-white">
                                                <i class="fa fa-briefcase" aria-hidden="true"></i> Experience
                                                <span class="ml-1 badge badge-light">{{ isset($profiles->experiences) ? $profiles->experiences->count() : 0 }}</span>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="card">
                                <div class="card-body bg-danger">
                                    <h4 class="font-14 text-uppercase text-white font-bold">
                                        <a class="text-white" href="{{ route('skills.index') }}">
                                            <span class="float-left text-white">
                                                <i class="fa fa-cogs" aria-hidden="true"></i> Skills
                                                <span class="ml-1 badge badge-light">{{ isset($profiles->skills) ? $profiles->skills->count() : 0 }}</span>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card">
                                <div class="card-body custom-btn-warning">
                                    <h4 class="font-14 text-uppercase text-white font-bold">
                                        <a class="text-white" href="{{ route('portfolios.index') }}">
                                            <span class="float-left text-white">
                                                <i class="fa fa-archive" aria-hidden="true"></i> Portfolios
                                                <span class="ml-1 badge badge-light">{{ isset($profiles->portfolios) ? $profiles->portfolios->count() : 0 }}</span>
                                            </span>

                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="card">
                                <div class="card-body bg-secondary">
                                    <h4 class="font-14 text-uppercase text-white font-bold">
                                        <a class="text-white" href="{{ route('admin.index') }}">
                                            <span class="float-left text-white">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> Degrees
                                            </span>
                                            <span class="badge badge-light">{{ isset($profiles->degrees) ? $profiles->degrees->count() : 0 }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection