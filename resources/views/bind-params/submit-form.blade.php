@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div>
                        Test auto bind POST params
                    </div>

                    <div>
                        Name: {{$name}}
                    </div>
                    <div>
                        Old: {{$old}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
