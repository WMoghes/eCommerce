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
<style>
    #map {
        margin: 10px;
    }
</style>
@endsection

@section('content')
        <!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"></h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('frontend.buildings') }}">{{ trans('welcome.buildings') }}</a>
                    </li>
                    <li class="active">
                        {{ $building->bu_name }}
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="card-box product-detail-box">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="sp-loading">
                                <img src="{{ getImagePath($building->image) }}" width="300" height="300">
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="product-right-info">
                                <h3><b>{{ $building->bu_name }}</b></h3>

                                <h2><b>${{ $building->bu_price }}</b>
                                    </h2>
                                <hr/>

                                <h5 class="font-600">{{ trans('welcome.description') }}</h5>

                                <p class="text-muted">{!! nl2br($building->bu_long_desc) !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row m-t-30" style="margin-top: 10px">
                        <div class="col-xs-4">
                            <h4><b>{{ trans('welcome.specifications') }}</b></h4>
                            <div class="table-responsive m-t-20">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>{{ trans('welcome.building_rent') }}</strong></td>
                                        <td>
                                            {{ setBuildingRentType($building->bu_rent) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ trans('welcome.building_square') }}</strong></td>
                                        <td>
                                            {{ $building->bu_square . ' ' . trans('welcome.meter')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ trans('welcome.building_room_num') }}</strong></td>
                                        <td>
                                            {{ $building->bu_room }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ trans('welcome.building_type') }}</strong></td>
                                        <td>
                                            {{ setBuildingType($building->bu_type) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ trans('welcome.building_region') }}</strong></td>
                                        <td>
                                            {{ get_place($building->bu_region) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ trans('welcome.added_at') }}</strong></td>
                                        <td>
                                            {{ $building->created_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!------------------------ To display the location building ------------------------------>
                        <div class="col-xs-8" id="map" style="width:650px;height:400px"></div>
                    </div>

                </div> <!-- end card-box/Product detai box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</div> <!-- content -->
<div class="row col-md-12" style="background-color: ghostwhite;margin-bottom: 15px;margin-top: 10px">
    <h3>{{ trans('welcome.another_buildings') }}</h3>
    <hr>
    @include('website.includes.similarBuildings')
</div>
@endsection

@section('script')
    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var myCenter = new google.maps.LatLng({{ $building->bu_longitude }},{{ $building->bu_latitude }});
            var mapOptions = {center: myCenter, zoom: 5};
            var map = new google.maps.Map(mapCanvas,mapOptions);
            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
@endsection
