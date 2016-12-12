@extends('admin.layouts.layout')

@section('title')
{{--    {{ trans('welcome.site_settings') }}--}}
@endsection

@section('page_title')
    {{ trans('welcome.site_settings') }}
@endsection

@section('content_header')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">{{ trans('welcome.dashboard') }}</a>
        </li>
        <li class="active">
            {{ trans('welcome.site_settings') }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.settings') }}</div>
                <div class="panel-body">
                    @include('admin.layouts.site_settings_form')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.layouts.flash_message')
@endsection