@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.flash_message')
            <h4 class="mt-3 mb-2">Portfolios</h4>
            <a href="{{ route('portfolios.create') }}" class="btn btn-sm btn-primary text-white">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Portfolio</a>
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
                                <th scope="col">Project Name</th>
                                <th scope="col">Live_url</th>
                                <th scope="col">Github_url</th>
                                <th scope="col">Stacks</th>
                                <th scope="col">Responsibility</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $key=>$portfolio)
                            <tr>
                                <td>{{ $portfolio->name }} </td>
                                <td>{{ $portfolio->live_url }} </td>
                                <td>{{ $portfolio->github_url }} </td>
                                <td>{{ $portfolio->stacks }} </td>
                                <td>{{ $portfolio->responsibility }} </td>
                                <td>
                                    <a class="btn btn-info btn-sm text-white" href="{{ route('portfolios.edit',['portfolio'=>$portfolio->id]) }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('portfolios.show',['portfolio'=>$portfolio->id]) }}" class="btn btn-sm btn-info text-white">
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