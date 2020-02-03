@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Employee Leave</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="leave amount">
                            <form method="post" action="{{url('/welcome')}}">
                                @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Number of Leave</label>
                                        <input type="text" name="leave" class="form-control" placeholder="Leave Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Reason of Leave</label>
                                        <textarea name="reason" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
