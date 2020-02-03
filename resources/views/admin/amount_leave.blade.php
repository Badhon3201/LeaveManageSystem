@extends('layouts.adminLayout.admin_design')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ session('flash_message_error') }}</strong>
                </div>
            @endif

            @if(Session::has('flash_message_sucess'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ session('flash_message_sucess') }}</strong>
                </div>
            @endif
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <form method="post" action="{{url('/admin/leave')}}">
                    @csrf
                    <div class="form-group">
                        <label>Leave Number</label>
                        <input type="text" name="leaveamount" class="form-control" placeholder="Enter leave number">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
