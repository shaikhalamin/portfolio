@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-8 ">
            <div class="card">
                <h5 class="text-center mt-2 mb-3 text-uppercase"><b>Edit Profile Information</b></h5>
                <div class="card-body mt-2 font-16">
                    <form method="POST" action="{{ route('profiles.update',['profile'=>$profile->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="full_name" class="">Full Name</label>
                                <input type="text" name="full_name" value="{{ old('full_name') ?:$profile->full_name  }}" class="form-control @error('full_name') is-invalid @enderror " id="full_name">
                                @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="cv_name" class="">CV Name</label>
                                <input type="text" name="cv_name" value="{{ old('cv_name') ?:$profile->cv_name }}" class="form-control @error('cv_name') is-invalid @enderror " id="cv_name">
                                @error('cv_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="">Email</label>
                                <input type="email" name="email" value="{{ old('email') ?:$profile->email }}" class="form-control @error('email') is-invalid @enderror " id="email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') ?:$profile->phone }}" class="form-control @error('phone') is-invalid @enderror " id="phone">
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="city" class="">City</label>
                                <input type="text" name="city" value="{{ old('city') ?:$profile->city }}" class="form-control @error('city') is-invalid @enderror " id="city">
                                @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" name="country" value="{{ old('country') ?:$profile->country }}" class="form-control @error('country') is-invalid @enderror " id="country">
                                @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="postal_code">Postal code</label>
                                <input type="text" name="postal_code" value="{{ old('postal_code') ?:$profile->postal_code }}" class="form-control @error('postal_code') is-invalid @enderror " id="postal_code">
                                @error('postal_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="date_of_birth">Date of birth</label>
                                <input type="text" name="date_of_birth" value="{{ old('date_of_birth') ?:$profile->date_of_birth }}" class="form-control @error('date_of_birth') is-invalid @enderror " id="date_of_birth">
                                @error('date_of_birth')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cityzenship">Cityzenship</label>
                                <input type="text" name="cityzenship" value="{{ old('cityzenship') ?:$profile->cityzenship }}" class="form-control @error('cityzenship') is-invalid @enderror " id="cityzenship">
                                @error('cityzenship')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="maritial_status">Maritial Status</label>
                                <input type="text" name="maritial_status" value="{{ old('maritial_status') ?:$profile->maritial_status }}" class="form-control @error('maritial_status') is-invalid @enderror " id="maritial_status">
                                @error('maritial_status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" value="{{ old('designation') ?:$profile->designation }}" class="form-control @error('designation') is-invalid @enderror " id="designation">
                                @error('designation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="specialized_at">Specialized At</label>
                                <input type="text" name="specialized_at" value="{{ old('specialized_at') ?:$profile->specialized_at }}" class="form-control @error('specialized_at') is-invalid @enderror " id="specialized_at">
                                @error('specialized_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="cv_file">CV Upload</label>
                                <input type="file" name="cv_file" value="{{ old('cv_file') ?:$profile->cv_file }}" class="form-control @error('cv_file') is-invalid @enderror " id="cv_file">
                                @error('cv_file')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="picture_cover">Picture Cover</label>
                                <input type="file" name="picture_cover" value="{{ old('picture_cover') ?:$profile->picture_cover }}" class="form-control @error('picture_cover') is-invalid @enderror " id="picture_cover">
                                @error('picture_cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="picture_about">Picture About</label>
                                <input type="file" name="picture_about" value="{{ old('picture_about') ?:$profile->picture_about }}" class="form-control @error('picture_about') is-invalid @enderror " id="picture_about">
                                @error('picture_about')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="linkedin_profile_path">Linkedin Profile</label>
                                <input type="text" name="linkedin_profile_path" value="{{ old('linkedin_profile_path') ?:$profile->linkedin_profile_path }}" class="form-control @error('linkedin_profile_path') is-invalid @enderror " id="linkedin_profile_path">
                                @error('linkedin_profile_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="github_profile_path">Github Profile</label>
                                <input type="text" name="github_profile_path" value="{{ old('github_profile_path') ?:$profile->github_profile_path }}" class="form-control @error('github_profile_path') is-invalid @enderror " id="github_profile_path">
                                @error('github_profile_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="twitter_profile_path">Twitter profile</label>
                                <input type="text" name="twitter_profile_path" value="{{ old('twitter_profile_path') ?:$profile->twitter_profile_path }}" class="form-control @error('twitter_profile_path') is-invalid @enderror " id="twitter_profile_path">
                                @error('twitter_profile_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="about_info">About Info</label>
                                <textarea name="about_info" class="form-control @error('about_info') is-invalid @enderror " id="about_info" rows="3">
                                {{ old('about_info') ?:$profile->about_info  }}
                                </textarea>
                                @error('about_info')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="profile_title">Profile Title</label>
                                <input type="text" name="profile_title" value="{{ old('profile_title') ?:$profile->profile_title }}" class="form-control @error('profile_title') is-invalid @enderror " id="profile_title">
                                @error('profile_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="profile_meta">Profile Meta</label>
                                <input type="text" name="profile_meta" value="{{ old('profile_meta') ?:$profile->profile_meta }}" class="form-control @error('profile_meta') is-invalid @enderror " id="profile_meta">
                                @error('profile_meta')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="profile_meta_descriptions">Profile Meta Descriptions</label>
                                <input type="text" name="profile_meta_descriptions" value="{{ old('profile_meta_descriptions') ?:$profile->profile_meta_descriptions }}" class="form-control @error('profile_meta_descriptions') is-invalid @enderror " id="profile_meta_descriptions">
                                @error('profile_meta_descriptions')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="smo_image">Smo Image</label>
                                <input type="file" name="smo_image" value="{{ old('smo_image') ?:$profile->smo_image }}" class="form-control @error('smo_image') is-invalid @enderror " id="smo_image">
                                @error('smo_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row float-right">
                            <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-outline-danger mr-2">Cancel</a>
                            <button type="submit" class="btn btn-sm btn-outline-info ">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</section>
@endsection

@section('javascript')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('about_info');

    $("#date_of_birth").datepicker({
        dateFormat: "yy-mm-dd",
    });
</script>

@endsection