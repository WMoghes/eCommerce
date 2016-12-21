@extends('layouts.app')

@section('title')
    {{ trans('welcome.welcome') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! Html::style('admin/assets/css/bootstrap-rtl.min.css') !!}
    {!! Html::style('admin/assets/css/icons.css') !!}
    {!! Html::style('admin/assets/css/pages.css') !!}
    {!! Html::style('website/assets/plugins/rangeSlider/ion.rangeSlider.css') !!}
    {!! Html::style('website/assets/plugins/rangeSlider/ion.rangeSlider.skinHTML5.css') !!}
    {!! Html::style('admin/assets/plugins/select-2/select2.min.css') !!}
@endsection

@section('end_of_header')
    <style>
        .bg-img-1 {
            background: url("{{ URL::to('website/images/website_images/background/dg.jpg') }}") no-repeat;
        }
        .bg-img-2 {
             background-color: #2f3e47;
        }
        .navbar-custom {
            background-color: transparent;
        }
    </style>
@endsection

@section('content_without_container')
    <!-- HOME -->
    <section class="home bg-img-1" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="home-fullscreen">
                        <div class="full-screen">
                            <div class="home-wrapper home-wrapper-alt">
                                <h2 class="font-light text-white">مرحبا بكم في الموقع الأشهر في الشرق الأوسط للعقارات</h2>
                                <h4 class="text-white">الان يمكنكم البحث عن أي عقارت من خلال تحديد البحث بالمكان و السعر الذي تريدة مع تحديد نوع العملية بالطبع سؤاء كانت إيجار أو تمليك. أضغط علي الزر ادناة لأكتشاف المزيد</h4>
                                <a href="#"
                                   target="_blank" class="btn btn-custom">أكتشف الان</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- Search -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('welcome.search') }}</div>

                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="row">
                                    {!! Form::open(['method' => 'get', 'role' => 'form', 'url' => route('frontend.buildings.search')]) !!}
                                    <div class="form-group">
                                        {!! Form::text('bu_name', retrieveValue('bu_name'), ['class' => 'form-control', 'placeholder' => trans('welcome.building_name')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::select('bu_type', getBuildingType(), retrieveValue('bu_type'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_type_select')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::select('bu_rent', getBuildingRentType(), retrieveValue('bu_rent'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_rent_select')]) !!}
                                    </div>
                                    <div class="form-group ">
                                        {!! Form::select('bu_room', getRoomsNumber(), retrieveValue('bu_room'), ['class' => 'selectpicker select','data-style' => 'btn-white', 'placeholder' => trans('welcome.building_select_rooms')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::select('bu_region', bu_places(), retrieveValue('bu_region'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_select_region')]) !!}
                                    </div>
                                    <div class="form-group" style="direction: ltr">
                                        <label class="pull-right" for="range_03">{{ trans('welcome.select_price') }}</label>
                                        <br>
                                        <input name="range" type="text" id="range_03" min="{{ minRange() }}" max="{{ maxRange() }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">
                                        {{ trans('welcome.search') }}
                                        <i class="fa fa-search"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            <!-- Our Image -->
                            <div class="col-md-6">
                                <img src="{{ URL::to('website/images/website_images/university.png') }}" width="440" height="395" style="margin-right: 5px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Search -->

    <!-- Display Buildings -->
    <section class="bg-img-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h1 style="color: white">{{ trans('welcome.building_latest') }}</h1>
                    </div>
                    @include('website.includes.buildings_show_to_homepage')
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Display Buildings -->
@endsection

@section('content')

@endsection

@section('script')
    {!! Html::script('admin/assets/plugins/select-2/select2.min.js') !!}
    {!! Html::script('admin/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! Html::script('website/assets/plugins/rangeSlider/ion.rangeSlider.min.js') !!}
    <script>
        $(document).ready(function() {
            $('.select').select2({
                dir: 'rtl'
            });
//            $('.full-screen').height($(window).height);
        });
        $(function(){
            'use strict';
            $('.home-fullscreen').height($(window).height());
        });
    </script>
    <script>
        var highest = {{ $info['highestPrice']->bu_price  }};
        var lowest = {{ $info['lowestPrice']->bu_price }};
        console.log('hig : ' + highest + ' and lo ' + lowest);
                @if(minRange())
        var to_val = {{ maxRange()  }};
        var from_val = {{ minRange() }};
                @else
        var to_val = highest;
        var from_val = lowest;
        @endif
        if (to_val == from_val){
            var to_val = highest;
            var from_val = lowest;
        }
        console.log('from : ' + from_val + ' and to ' + to_val);
        $("#range_03").ionRangeSlider({
            type: "double",
            grid: true,
            min: lowest,
            max: highest,
            from: from_val,
            to: to_val,
            // don't forget to insert rtl unicode before add 'ج‎'
            prefix: "ج‎"
        });
    </script>
    <script>
        var sliderBar = document.getElementsByClassName('irs')[1].childNodes[0];
        sliderBar.classList.add('silderBar');
    </script>
@endsection