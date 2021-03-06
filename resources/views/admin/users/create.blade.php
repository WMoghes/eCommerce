@extends('admin.layouts.layout')

@section('title')
    {{ trans('welcome.users_create') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! Html::style('website/assets/ar/css/ar_style.css') !!}
@endsection

@section('page_title')
    {{ trans('welcome.users_create') }}
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
            {{ trans('welcome.users_create') }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.register') }}</div>
                <div class="panel-body">

                    {!! Form::open(['class' => 'form-horizontal', 'role' => 'form','id' => 'user_create', 'method' => 'POST'
                                    , 'url' => route('adminpanel.users.store') ]) !!}
                        @include('admin.layouts.user_create_form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('admin/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') !!}
    <script>
        $.ajax({
            type: 'POST',
            url: '{{ route('adminpanel.users.store') }}',
            data: {
                    name: 'welzzzz', email: 'xxxx@ddd.dd', password: '321321', admin: 1
            } ,
            success: function(){
                alert('Done..');
            }
        });
    </script>
@endsection