@extends('layouts.admin')

@section('content')
<section class="">
    <div class="card">
        <h5 class="text-justify mt-2 ml-3 text-uppercase">Add Profile Information</h5>
        <div class="card-body mt-2">
            <form method="POST" action="{{ route('admin.profile.save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="full_name" class="form-control" id="full_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cv_name">CV Name</label>
                        <input type="text" name="cv_name" class="form-control" id="cv_name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" id="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control" id="country">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="postal_code">Postal code</label>
                        <input type="text" name="postal_code" class="form-control" id="postal_code">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="date_of_birth">Date of birth</label>
                        <input type="text" name="date_of_birth" class="form-control" id="date_of_birth">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cityzenship">Cityzenship</label>
                        <input type="text" name="cityzenship" class="form-control" id="cityzenship">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="maritial_status">Maritial Status</label>
                        <input type="text" name="maritial_status" class="form-control" id="maritial_status">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control" id="designation">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="specialized_at">Specialized At</label>
                        <input type="text" name="specialized_at" class="form-control" id="specialized_at">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="picture_cover">Picture Cover</label>
                        <input type="text" name="picture_cover" class="form-control" id="picture_cover">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="picture_about">Picture About</label>
                        <input type="text" name="picture_about" class="form-control" id="picture_about">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="linkedin_profile_path">Linkedin Profile</label>
                        <input type="text" name="linkedin_profile_path" class="form-control" id="linkedin_profile_path">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="github_profile_path">Github Profile</label>
                        <input type="text" name="github_profile_path" class="form-control" id="github_profile_path">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="twitter_profile_path">Twitter profile</label>
                        <input type="text" name="twitter_profile_path" class="form-control" id="twitter_profile_path">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="about_info">About Info</label>
                        <textarea name="about_info" class="form-control" id="about_info" rows="3"></textarea>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="profile_title">Profile Title</label>
                        <input type="text" name="profile_title" class="form-control" id="profile_title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="profile_meta">Profile Meta</label>
                        <input type="text" name="profile_meta" class="form-control" id="profile_meta">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="profile_meta_descriptions">Profile Meta Descriptions</label>
                        <input type="text" name="profile_meta_descriptions" class="form-control" id="profile_meta_descriptions">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="smo_image">smo_image</label>
                        <input type="text" name="smo_image" class="form-control" id="smo_image">
                    </div>
                </div>
                <div class="form-row float-right">
                    <a href="{{ route('admin.profile.index') }}" class="btn btn-sm btn-outline-danger mr-2">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-outline-info ">Submit</button>
                </div>
            </form>

        </div>
    </div>

</section>
@endsection