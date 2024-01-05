@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <p class="p-0 m-0 fw-bold me-auto">Create Student</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger btn-sm ms-auto">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
