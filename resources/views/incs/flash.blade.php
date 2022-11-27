@if($message = Session::get('success'))
    <div class="alert alert-success alert-block my-2">
        <button type="button" class="btn-close shadow-none me-2" data-dismiss="alert" aria-label="Close"></button>
        <strong class="ms-2 mb-2">{{ $message }}</strong>
    </div>
@endif
