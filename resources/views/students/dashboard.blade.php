@extends('layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div>
                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm rounded">Add Student</a>
            </div>
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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
