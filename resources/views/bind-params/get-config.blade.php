@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2>
                        Test auto binds: Get configs
                    </h2>

                    <div>
                        + Config: /config/app.php>name is: <span style="color:red;">{{$appName}}</span>
                    </div>

                    <div>
                        + Config: /config/logging.php>channels>daily is: 
                        <pre/>
                        <span style="color:red;"><?php print_r($logDaily);?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
