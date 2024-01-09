@extends('layout.layout')

@section('content')
    @include('shared.navigation_bar')

    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <div>
                    <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm rounded">Add Student</a>
                </div>

                @include('shared.status_message')
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>SI</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Section</th>
                            <th>Course</th>
                            <th>Profile Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->mobile_number }}</td>
                                <td>{{ $student->section }}</td>
                                <td>{{ $student->course }}</td>
                                <td class="d-flex justify-content-center">
                                    <img src="{{ $student->get_image_url() }}" alt=""
                                        style="border-radius: 50%; width:100px; height: 100px;    object-fit: cover;">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('students.edit', $student) }}" class="btn btn-success btn-sm"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('students.destroy', $student) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm delete-data"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SI</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Section</th>
                            <th>Course</th>
                            <th>Profile Picture</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        {{-- Confirm delete modal --}}

        <!-- Modal -->
        <div class="modal fade" id="confirm-delete-modal" tabindex="-1" aria-labelledby="confirm-delete-modal-label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="confirm-delete-label">Are you sure?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-primary">Cancel</button>
                            <button class="btn btn-danger confirm-delete">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            new DataTable('#example');

            $('.delete-data').click(function(e) {
                e.preventDefault();

                const data = $(this);

                $('#confirm-delete-modal').modal('show');

                $('.confirm-delete').click(function() {
                    data.closest("form").submit();
                });
            });

        });
    </script>
@endsection
