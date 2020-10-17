@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.flash_message')
            <h4 class="mt-3 mb-2">Experiences</h4>
            <a href="{{ route('experiences.create') }}" class="btn btn-sm btn-primary text-white">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Experience</a>
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
                                <th scope="col">Company Name</th>
                                <th scope="col">Company City</th>
                                <th scope="col">Company Country</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Date From</th>
                                <th scope="col">Date To</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experiences as $key=>$experience)
                            <tr>
                                <td>{{ $experience->company_name }}</td>
                                <td>{{ $experience->company_city }}</td>
                                <td>{{ $experience->company_country }}</td>
                                <td>{{ $experience->designation }}</td>
                                <td>{{ $experience->date_from }}</td>
                                <td>{{ $experience->date_to }}</td>
                                <td>

                                    <a class="btn btn-info btn-sm text-white" href="{{ route('experiences.edit',['experience'=>$experience->id]) }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('experiences.show',['experience'=>$experience->id]) }}" class="btn btn-sm btn-info text-white">
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