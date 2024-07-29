@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Test auto binds post form

                    <form action="submit" method="POST">
                        @csrf
                        <label for="name">Name</label>
                        <input name="name" id="name" type="text">

                        <label for="old">Old</label>
                        <input name="old" id="old" type="text">

                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
