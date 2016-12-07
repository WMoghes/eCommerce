@extends('layouts.app')

@section('title')
    {{ trans('welcome.welcome') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.welcome') }}</div>

                <div class="panel-body">
                    {{ trans('welcome.message') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
