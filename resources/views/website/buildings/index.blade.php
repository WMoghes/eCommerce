@extends('layouts.app')

@section('title')
    {{ trans('welcome.welcome') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/css/bootstrap-rtl.min.css') !!}
    {!! Html::style('admin/assets/css/icons.css') !!}
    {!! Html::style('admin/assets/css/pages.css') !!}
{{--    {!! Html::style('admin/assets/css/responsive.css') !!}--}}
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;margin-top: 20px">
            <div class="m-b-15">
                
                <div class="col-md-3" style="margin-top: 30px">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            {{ trans('welcome.search') }}
                        </div>
                        <div class="panel panel-body">
                            <ul style="list-style-type: none">
                                <li>
                                    <a href="">test</a>
                                    <i class="ti-angle-left"></i>
                                </li>
                                <li>
                                    <a href="">test 2</a>
                                    <i class="ti-angle-left"></i>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-9" style="background-color: #95A8B7">
                    @include('website.includes.buildings_show')
                </div>

            </div>
        </div> <!-- End row -->
    </div> <!-- container -->
@endsection

@section('script')

@endsection
