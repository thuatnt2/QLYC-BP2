@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/bp2.css') }}">
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
{{-- app.js --}}
<script src="{{ URL::asset('js/bp2.js') }}"></script>
@stop