@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div>
                        Test auto bind POST with header and params
                    </div>

                    <div>
                        Header key: {{$keyHeader}}
                    </div>

                    <div>
                        Param 1: {{$param1}}
                    </div>
                    <div>
                        Param 2: {{$param2}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
