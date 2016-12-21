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

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;margin-top: 20px">
            <div class="m-b-15">

                <div class="col-md-3" style="margin-top: 30px">
                    @include('website.includes.buildings_side_bar')
                </div>
                
                <div class="col-md-9" style="background-color: #95A8B7">
                    @include('website.includes.buildings_show')
                    <div class="clear-fix"></div>
                        <div class="col-sm-12 text-center">
                            {{ $building->render() }}
                        </div>
                </div>

            </div>
        </div> <!-- End row -->
    </div> <!-- container -->
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
        });
//        var findClassHere = document.getElementById('sticky-nav-sticky-wrapper');
//        findClassHere.removeAttribute("class");
        console.log(document.body.firstElementChild);
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
@endsection
