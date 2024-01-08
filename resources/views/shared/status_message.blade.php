@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong>Hey!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        <strong>Hey!</strong> {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
