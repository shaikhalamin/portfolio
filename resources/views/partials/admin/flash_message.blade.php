@if (session('created'))
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('created') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif

@if (session('error'))
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

@endif