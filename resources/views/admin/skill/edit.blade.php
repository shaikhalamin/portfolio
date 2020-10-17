@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row mt-3">
        <div class="col-md-8 ">
            <div class="card">
                <h5 class="text-center mt-2 mb-3 text-uppercase"><b>Edit Skill</b></h5>
                <div class="card-body mt-2">
                    <form method="POST" action="{{ route('skills.update',['skill'=>$skill->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="type" class="">Type</label>
                                <input type="text" name="type" value="{{ old('type') ?:$skill->type }}" placeholder="like frontend backend devops mobile" class="form-control @error('type') is-invalid @enderror " id="type">
                                @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="functional_type" class="">Functional Type</label>
                                <input type="text" name="functional_type" value="{{ old('functional_type') ?:$skill->functional_type }}" placeholder="like oop or functional or procedural or structured or cloud or vcs etc" class="form-control @error('functional_type') is-invalid @enderror " id="functional_type">
                                @error('functional_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="main_stack" class="">Main Stack</label>
                                <input type="text" name="main_stack" value="{{ old('main_stack') ?:$skill->main_stack }}" placeholder="like php or c# or js or sql" class="form-control @error('main_stack') is-invalid @enderror " id="main_stack">
                                @error('main_stack')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="framework_library" class="">Framework Library</label>
                                <input type="text" name="framework_library" value="{{ old('framework_library') ?:$skill->framework_library }}" class="form-control @error('framework_library') is-invalid @enderror " id="framework_library">
                                @error('framework_library')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="framework_1" class="">First Framework</label>
                                <input type="text" name="framework_1" value="{{ old('framework_1') ?:$skill->framework_1 }}" class="form-control @error('framework_1') is-invalid @enderror " id="phone">
                                @error('framework_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="framework_2" class="">Second Framework</label>
                                <input type="text" name="framework_2" value="{{ old('framework_2') ?:$skill->framework_2 }}" class="form-control @error('framework_2') is-invalid @enderror " id="framework_2">
                                @error('framework_2')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="framework_3">Third Framework</label>
                                <input type="text" name="framework_3" value="{{ old('framework_3') ?:$skill->framework_3 }}" class="form-control @error('framework_3') is-invalid @enderror " id="framework_3">
                                @error('framework_3')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row float-right">
                            <a href="{{ route('skills.index') }}" class="btn btn-sm btn-outline-danger mr-2">Cancel</a>
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

@endsection