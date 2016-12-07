@extends('layouts.app')

@section('title')
    {{ trans('welcome.dashboard') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.dashboard') }}</div>

                <div class="panel-body">
                    {{ trans('welcome.welcome_msg') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
