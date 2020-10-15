@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row text-justify">
                        <div class="col-md-3 ">
                            <div class="card">
                                <div class="card-body custom-btn-info">
                                    <h4 class="font-18 text-uppercase text-white font-bold">
                                        <span class="float-left text-white mr-1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                                        <a class="text-white" href="{{ route('profiles.index') }}">
                                            Profiles
                                            <span class="badge badge-light ml-1">{{ $profiles->count() }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="card">
                                <div class="card-body bg-success">
                                    <h4 class="font-18 text-uppercase text-white font-bold">
                                        <span class="float-left text-white mr-1"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                        <a class="text-white" href="{{ route('experiences.index') }}">
                                            Experience
                                            <span class="badge badge-light ml-1">{{ isset($profiles->experiences) ? $profiles->experiences->count() : 0 }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="card">
                                <div class="card-body bg-danger">
                                    <h4 class="font-18 text-uppercase text-white font-bold">
                                        <span class="float-left text-white mr-1"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                        <a class="text-white" href="{{ route('admin.index') }}">
                                            Skills
                                            <span class="badge badge-light ml-1">{{ isset($profiles->skills) ? $profiles->skills->count() : 0 }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card">
                                <div class="card-body custom-btn-warning">
                                    <h4 class="font-18 text-uppercase text-white font-bold">
                                        <span class="float-left text-white mr-1"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                        <a class="text-white" href="{{ route('admin.index') }}">
                                            Portfolios
                                            <span class="badge badge-light ml-1">{{ isset($profiles->portfolios) ? $profiles->portfolios->count() : 0 }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="card">
                                <div class="card-body bg-secondary">
                                    <h4 class="font-18 text-uppercase text-white font-bold">
                                        <span class="float-left text-white mr-1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                        <a class="text-white" href="{{ route('admin.index') }}">
                                            Degrees
                                            <span class="badge badge-light ml-1">{{ isset($profiles->degrees) ? $profiles->degrees->count() : 0 }}</span>
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