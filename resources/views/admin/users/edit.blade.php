@extends('admin.layouts.layout')

@section('title')
    {{ trans('welcome.users_edit') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! Html::style('website/assets/ar/css/ar_style.css') !!}
@endsection

@section('page_title')
    {{ trans('welcome.users_edit') }}
@endsection

@section('content_header')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">{{ trans('welcome.dashboard') }}</a>
        </li>
        <li>
            <a href="{{ route('adminpanel.users.index') }}">{{ trans('welcome.users') }}</a>
        </li>
        <li class="active">
            {{ trans('welcome.users_edit') }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.register') }}</div>
                <div class="panel-body">

                    {!! Form::model($user, ['class' => 'form-horizontal', 'role' => 'form', 'method' => 'PUT',
                                    'url' => route('adminpanel.users.update', $user->id)]) !!}
                        @include('admin.layouts.user_edit_form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('admin/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') !!}
@endsection