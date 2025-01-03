@extends('layout.layout')

@section('content')
    <div class="container py-4">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ route('students.update', $student) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <p class="p-0 m-0 fw-bold me-auto">Update Student</p>
                            <a href="{{ route('dashboard') }}" class="btn btn-danger btn-sm ms-auto rounded">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="form-group mb-3">

                                <label for="name" class="fw-bold">Name</label>
                                <input type="text" class="form-control border border-dark" id="name" name="name"
                                    value="{{ $student->name }}">
                                @error('name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="fw-bold">Email</label>
                                <input type="text" class="form-control border border-dark" id="email" name="email"
                                    value="{{ $student->email }}">
                                @error('email')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="mobile" class="fw-bold">Mobile NO.</label>
                                <input type="text" class="form-control border border-dark" id="mobile"
                                    name="mobile_number" value="{{ $student->mobile_number }}">
                                @error('mobile_number')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="section" class="fw-bold">Section</label>
                                <input type="text" class="form-control border border-dark" id="section" name="section"
                                    value="{{ $student->section }}">
                                @error('section')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="course" class="fw-bold">Course</label>
                                <input type="text" class="form-control border border-dark" id="course" name="course"
                                    value="{{ $student->course }}">
                                @error('course')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <img src="{{ $student->getImageUrl() }}" alt=""
                                    style="width:200px; height:200px; object-fit: cover;  border-radius: 50%;"
                                    class="mb-3" id="profile-picture-preview">
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
                            <button type="submit" class="btn btn-success btn-sm float-end rounded">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            //Profile picture preview
            $('#profile-img').change(function() {

                let file = new FileReader();

                file.onload = function(e) {
                    $('#profile-picture-preview').attr('src', e.target.result);
                }

                file.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
