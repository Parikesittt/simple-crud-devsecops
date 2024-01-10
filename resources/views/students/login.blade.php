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
            <div class="card-header">
                <p class="fw-bold">Login</p>
                @include('shared.status_message')
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="fw-bold">Email</label>
                        <input type="text" class="form-control border border-primary" id="email" name="email">
                        @error('name')
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
                    <div>

                        <div class="form-check mb-3">
                            <input class="form-check-input border border-primary" type="checkbox" value=""
                                id="remmember-me" name="remmember-me" value="1">
                            <label class="form-check-label" for="remmember-me">
                                Remmember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Login</button>
                        <a href="{{ route('register') }}" class="float-end">Register now!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
