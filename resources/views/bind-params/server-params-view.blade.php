@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Test auto binds server params
                </div>
                <div>
                    Remote Address: {{$remoteAddr}}
                </div>
                <div>
                    Server Port: {{$serverPort}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
