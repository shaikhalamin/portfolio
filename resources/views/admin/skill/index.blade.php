@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.flash_message')
            <h4 class="mt-3 mb-2">Skills</h4>
            <a href="{{ route('skills.create') }}" class="btn btn-sm btn-primary text-white">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Skills</a>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover border font-14">
                        <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Functional type</th>
                                <th scope="col">Main stack</th>
                                <th scope="col">Framework Library</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $key=>$skill)
                            <tr>
                                <td>{{ $skill->type }} </td>
                                <td>{{ $skill->functional_type }} </td>
                                <td>{{ $skill->main_stack }} </td>
                                <td>{{ $skill->framework_library }} </td>
                                <td>
                                    <a class="btn btn-info btn-sm text-white" href="{{ route('skills.edit',['skill'=>$skill->id]) }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('skills.show',['skill'=>$skill->id]) }}" class="btn btn-sm btn-info text-white">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="nav justify-content-center mt-1 mb-1">
                        {{ $skills->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection