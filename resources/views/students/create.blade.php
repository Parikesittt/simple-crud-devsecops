@extends('layout.layout')

@section('content')
    <div class="container py-4">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <p class="p-0 m-0 fw-bold me-auto">Create Student</p>
                            <a href="{{ route('dashboard') }}" class="btn btn-danger btn-sm ms-auto rounded">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="form-group mb-3">

                                <label for="name" class="fw-bold">Name</label>
                                <input type="text" class="form-control border border-dark" id="name" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="fw-bold">Email</label>
                                <input type="text" class="form-control border border-dark" id="email" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="mobile" class="fw-bold">Mobile NO.</label>
                                <input type="text" class="form-control border border-dark" id="mobile"
                                    name="mobile_number" value="{{ old('mobile_number') }}">
                                @error('mobile_number')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="section" class="fw-bold">Section</label>
                                <input type="text" class="form-control border border-dark" id="section" name="section"
                                    value="{{ old('section') }}">
                                @error('section')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="course" class="fw-bold">Course</label>
                                <input type="text" class="form-control border border-dark" id="course" name="course"
                                    value="{{ old('course') }}">
                                @error('course')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="profile-img" class="fw-bold">Profile Picture</label>
                                <input type="file" class="form-control border border-dark" id="profile-img"
                                    name="profile_image">
                                @error('profile_image')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm float-end rounded">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- SI	NAME	EMAIL	MOBILE NUMBER	SECTION	COURSE	PROFILE PICTURE --}}
