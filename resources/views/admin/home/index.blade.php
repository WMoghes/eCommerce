@extends('admin.layouts.layout')

@section('header')

@endsection

@section('page_title')
    {{ trans('welcome.dashboard') }}
@endsection

@section('content_header')
    <ol class="breadcrumb">
        <li class="active">
            <a href="{{ route('dashboard') }}">{{ trans('welcome.dashboard') }}</a>
        </li>
    </ol>
@endsection

@section('content')

@endsection

@section('script')

@endsection