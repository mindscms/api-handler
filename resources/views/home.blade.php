@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees['data'] as $employee)
                            <tr>
                                <td>{{ $employee['id'] }}</td>
                                <td>{{ $employee['employee_name'] }}</td>
                                <td>{{ $employee['employee_salary'] }}</td>
                                <td>{{ $employee['employee_age'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
