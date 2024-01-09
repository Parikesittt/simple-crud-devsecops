@extends('layout.layout')
@section('content')
    <div class="container py-4"
        style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width:40rem;
        ">

        <div class="card">
            <div class="card-header d-flex align-items-center">
                <p class="fw-bold m-0 p-0">Register</p>
                <a href="{{ route('login') }}" class="btn btn-sm btn-danger ms-auto">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('authentication.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bold">Name</label>
                        <input type="text" class="form-control border border-primary" id="name" name="name">
                        @error('name')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="fw-bold">Email</label>
                        <input type="text" class="form-control border border-primary" id="email" name="email">
                        @error('email')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="fw-bold">Password</label>
                        <input type="password" class="form-control border border-primary" id="password" name="password">
                        @error('password')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="confirm-password" class="fw-bold">Confirm password</label>
                        <input type="password" class="form-control border border-primary" id="confirm-password"
                            name="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
