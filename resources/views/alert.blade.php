{{-- Message --}}
@if (Session::has('success'))
<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-success">{!! session::get('success') !!}</h6>
            {{-- <div>A simple success alert—check it out!</div> --}}
        </div>
    </div>
    <button type="button" class="btn-close alert_close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (Session::has('error'))
<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-danger">{!! session::get('error') !!}</h6>
            {{-- <div>A simple danger alert—check it out!</div> --}}
        </div>
    </div>
    <button type="button" class="btn-close alert_close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif