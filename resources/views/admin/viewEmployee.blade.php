@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="text">
                <br>
                <h3>All Employee</h3>
            </div>
            <br>
            <table class="table">
                <thead class="thead-dark">
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->address}}</td>
                        <td>
                            <a>
                                <button class="btn-success">View</button>
                            </a>
                            <a href="{{route('leave',[$employee->id])}}">
                                <button type="submit" class="btn-success">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
