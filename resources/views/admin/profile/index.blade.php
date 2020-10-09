@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            <h4>Profiles</h4>
            <a href="{{ route('admin.profile.create') }}" class="btn btn-sm btn-info">Create profile</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection