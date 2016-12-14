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
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;margin-top: 20px">
            <div class="m-b-15">

                <div class="col-md-3" style="margin-top: 30px">
                    @include('website.includes.buildings_side_bar')
                </div>
                
                <div class="col-md-9" style="background-color: #95A8B7">
                    @include('website.includes.buildings_show')
                    <div class="text-center">
                        {{ $building->links() }}
                    </div>
                </div>

            </div>
        </div> <!-- End row -->
    </div> <!-- container -->
@endsection

@section('script')
    {!! Html::script('admin/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! Html::script('website/assets/plugins/rangeSlider/ion.rangeSlider.min.js') !!}
    <script>
        var highest = {{ $info['highestPrice']->bu_price  }};
        var lowest = {{ $info['lowestPrice']->bu_price }};
        $("#range_03").ionRangeSlider({
            type: "double",
            grid: true,
            min: lowest,
            max: highest,
            from: lowest,
            to: highest,
            // don't forget to insert rtl unicode before add 'ج‎'
            prefix: "ج‎"
        });
    </script>
@endsection
