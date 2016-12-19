@extends('admin.layouts.layout')

@section('title')
    {{ trans('welcome.building_edit') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! Html::style('admin/assets/plugins/select-2/select2.min.css') !!}
    {!! Html::style('website/assets/ar/css/ar_style.css') !!}
@endsection

@section('page_title')
    {{ trans('welcome.building_edit') }}
@endsection

@section('content_header')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">{{ trans('welcome.dashboard') }}</a>
        </li>
        <li>
            <a href="{{ route('adminpanel.buildings.index') }}">{{ trans('welcome.buildings') }}</a>
        </li>
        <li class="active">
            {{ trans('welcome.building_edit') }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.building_edit') }}</div>
                <div class="panel-body">

                    {!! Form::model($building, ['class' => 'form-horizontal', 'role' => 'form', 'method' => 'PUT',
                                    'url' => route('adminpanel.buildings.update', $building->id), 'files' => true]) !!}
                        @include('admin.layouts.building_edit_form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('admin/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! Html::script('admin/assets/plugins/select-2/select2.min.js') !!}
    <script>
        $(document).ready(function() {
            $('.select').select2({
                dir: 'rtl'
            });
        });
        document.getElementById('imageUpload').onchange = function (event) {
            'use strict';
            var reader = new FileReader();
            reader.onload = function () {
                var dataURL = reader.result;
                document.getElementById('bu_image').src = dataURL;
            };
            console.log(event.target.files[0]);
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection