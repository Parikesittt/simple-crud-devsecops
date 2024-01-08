@extends('layout.layout')

@section('content')
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
                            <td class="d-flex justify-content-center"><img src="{{ $student->get_image_url() }}"
                                    alt="" style="border-radius: 50%;"></td>
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
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            new DataTable('#example');
        });
    </script>
@endsection
