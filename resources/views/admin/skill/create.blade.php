@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-8 ">
            <div class="card">
                <h5 class="text-center mt-2 mb-3 text-uppercase"><b>Add Experience</b></h5>
                <p class="text-center mt-1 mb-3 text-uppercase font-13"> <b>N:B Please add experience in a descending order</b> </p>
                <div class="card-body mt-2">
                    <form method="POST" action="{{ route('experiences.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="company_name" class="">Company Name</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control @error('company_name') is-invalid @enderror " id="company_name">
                                @error('company_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="company_email" class="">Company Email</label>
                                <input type="email" name="company_email" value="{{ old('company_email') }}" class="form-control @error('company_email') is-invalid @enderror " id="company_email">
                                @error('company_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="company_phone" class="">Company Phone</label>
                                <input type="text" name="company_phone" value="{{ old('company_phone') }}" class="form-control @error('company_phone') is-invalid @enderror " id="company_phone">
                                @error('company_phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company_location" class="">Company Location</label>
                                <input type="text" name="company_location" value="{{ old('company_location') }}" class="form-control @error('company_location') is-invalid @enderror " id="phone">
                                @error('company_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="company_city" class="">Company City</label>
                                <input type="text" name="company_city" value="{{ old('company_city') }}" class="form-control @error('company_city') is-invalid @enderror " id="company_city">
                                @error('company_city')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company_country">Company Country</label>
                                <input type="text" name="company_country" value="{{ old('company_country') }}" class="form-control @error('company_country') is-invalid @enderror " id="company_country">
                                @error('company_country')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="company_website">Company Website</label>
                                <input type="text" name="company_website" value="{{ old('company_website') }}" class="form-control @error('company_website') is-invalid @enderror " id="company_website">
                                @error('company_website')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_website">Project Website</label>
                                <input type="text" name="project_website" value="{{ old('project_website') }}" class="form-control @error('project_website') is-invalid @enderror " id="project_website">
                                @error('project_website')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" value="{{ old('designation') }}" class="form-control @error('designation') is-invalid @enderror " id="designation">
                                @error('designation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="job_type">Job Type</label>
                                <input type="text" name="job_type" value="{{ old('job_type') }}" class="form-control @error('job_type') is-invalid @enderror " id="job_type">
                                @error('job_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="date_from">From Date</label>
                                <input type="text" name="date_from" value="{{ old('date_from') }}" class="form-control @error('date_from') is-invalid @enderror " id="date_from" autocomplete="off">
                                @error('date_from')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="date_to">To Date</label>
                                <input type="text" name="date_to" value="{{ old('date_to') }}" class="form-control @error('date_to') is-invalid @enderror " id="date_to" autocomplete="off">
                                @error('date_to')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="job_responsibility">Job Responsibility</label>
                                <textarea name="job_responsibility" value="{{ old('job_responsibility') }}" class="form-control @error('job_responsibility') is-invalid @enderror " id="job_responsibility" rows="3">
                                {{ old('job_responsibility') }}
                                </textarea>
                                @error('job_responsibility')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="work_stack">Work Stack</label>
                                <input type="text" name="work_stack" value="{{ old('work_stack') }}" class="form-control @error('work_stack') is-invalid @enderror " id="work_stack" placeholder="Please insert comma seperated value">
                                @error('work_stack')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row float-right">
                            <a href="{{ route('experiences.index') }}" class="btn btn-sm btn-outline-danger mr-2">Cancel</a>
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
    CKEDITOR.replace('job_responsibility');
    $("#date_from").datepicker({
        dateFormat: "yy-mm-dd",
    });
    $("#date_to").datepicker({
        dateFormat: "yy-mm-dd"
    });
</script>

@endsection