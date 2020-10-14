@extends('layouts.admin')

@section('content')
<section>

    <div class="row">
        <div class="col-md-12 mt-3">
            <h4 class="mt-2 mb-3"><b>Profiles Details</b></h4>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover border">
                        <thead>
                        </thead>
                        <tbody class="font-16">
                            <tr>
                                <th>Full Name</th>
                                <td>{{ $profile->full_name }} </td>
                                <th>Designation</th>
                                <td>{{ $profile->designation }} </td>

                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $profile->email }} </td>
                                <th>Phone</th>
                                <td>{{ $profile->phone }} </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $profile->city }} </td>
                                <th>Country</th>
                                <td>{{ $profile->country }} </td>
                            </tr>
                            <tr>
                                <th>Cv name</th>
                                <td>{{ $profile->cv_name }}</td>
                                <th>Postal Code</th>
                                <td>{{ $profile->postal_code }}</td>

                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $profile->date_of_birth }}</td>
                                <th>Cityzenship</th>
                                <td>{{ $profile->cityzenship }}</td>

                            </tr>

                            <tr>
                                <th>Maritial Status</th>
                                <td>{{ $profile->maritial_status }}</td>
                                <th>Specialized At</th>
                                <td>{{ $profile->specialized_at }}</td>
                            </tr>

                            <tr>
                                <th>Picture Cover</th>
                                <td>{{ $profile->picture_cover }}</td>
                                <th>Picture about</th>
                                <td>{{ $profile->picture_about }}</td>

                            </tr>

                            <tr>
                                <th>Linkedin_profile</th>
                                <td>{{ $profile->linkedin_profile_path }}</td>
                                <th>Smo_image</th>
                                <td>{{ $profile->smo_image }}</td>

                            </tr>

                            <tr>
                                <th>Github_profile</th>
                                <td>{{ $profile->github_profile_path }}</td>
                                <th>Twitter_profile</th>
                                <td>{{ $profile->twitter_profile_path }}</td>
                            </tr>

                            <tr>
                                <th>Profile_title</th>
                                <td>{{ $profile->profile_title }}</td>
                                <th>Profile_meta</th>
                                <td>{{ $profile->profile_meta }}</td>
                            </tr>

                            <tr>
                                <th>
                                    About Information
                                </th>
                                <td>
                                    <p>
                                        {{ $profile->about_info }}
                                    </p>
                                </td>
                                <th>Profile_meta_descriptions</th>
                                <td>{{ $profile->profile_meta_descriptions }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


</section>
@endsection