@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12 ml-2">
            @include('partials.admin.flash_message')
            <h4 class="mt-3 mb-1">Profiles</h4>
            @if($profiles->count() == 0)
            <a href="{{ route('profiles.create') }}" class="btn btn-sm btn-primary text-white">
                <i class="fa fa-plus" aria-hidden="true"></i> Create Profile
            </a>
            @endif
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover border font-16">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">City</th>
                                <th scope="col">Country</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $key=>$profile)
                            <tr>
                                <td>{{ $profile->full_name }} </td>
                                <td>{{ $profile->designation }} </td>
                                <td>{{ $profile->email }} </td>
                                <td>{{ $profile->phone }} </td>
                                <td>{{ $profile->city }} </td>
                                <td>{{ $profile->country }} </td>
                                <td>

                                    <a class="btn btn-info btn-sm text-white" href="{{ route('profiles.edit',['profile'=>$profile->id]) }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('profiles.show',['profile'=>$profile->id]) }}" class="btn btn-sm btn-info text-white">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection