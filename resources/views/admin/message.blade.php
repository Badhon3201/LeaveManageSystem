@extends('layouts.adminLayout.admin_design')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <div class="message">
                    @foreach($messages as $message)
                         <h4>A Employee is request for Application</h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Reason of Leave</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($employees as $employee)
                                    <th>{{$employee->name}}</th>
                                @endforeach
                                <td>{{$message->leave}}</td>
                                <td>{{$message->reason}}</td>
                                <td>
                                    <a>
                                        <button class="btn btn-success">Granted</button>
                                    </a>
                                    <a>
                                        <button class="btn btn-danger">Cancel granted</button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
