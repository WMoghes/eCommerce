@if(count($building) > 0)

    {{--@foreach(array_chunk($building, 3) as $bu)--}}
    {{--<div class="row">--}}
    {{--@foreach($bu as $item)--}}
    {{--<div class="col-sm-6 col-lg-4 col-md-4 mobiles">--}}
    {{--<div class="product-list-box thumb">--}}
    {{--<a href="" class="image-popup" title="{{ $item['bu_small_desc'] }}">--}}
    {{--<img--}}
    {{--style="height: 280px"--}}
    {{--src="http://www.cement.org/images/default-source/codes-standards/codes_splash.jpg?sfvrsn=0"--}}
    {{--class="thumb-img" alt="work-thumbnail">--}}
    {{--</a>--}}

    {{--<div class="product-action">--}}
    {{--<a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>--}}
    {{--<a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>--}}
    {{--</div>--}}

    {{--<div class="price-tag">--}}
    {{--${{ $item['bu_price'] }}--}}
    {{--</div>--}}
    {{--<div class="detail">--}}
    {{--<h4 class="m-t-0"><a href="" class="text-dark">{{ $item['bu_name'] }}</a> </h4>--}}
    {{--<h5 class="m-0"> <span class="text-muted"> {{ str_limit($item['bu_small_desc'], 40) }}</span></h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--@endforeach--}}


    @foreach($building as $key => $item)
        <div class="col-sm-6 col-lg-4 col-md-4 mobiles">
                    <div class="product-list-box thumb">
                        <a href="" class="image-popup" title="{{ $item->bu_small_desc }}">
                            <img
                                    style="height: 280px"
                                    src="http://www.cement.org/images/default-source/codes-standards/codes_splash.jpg?sfvrsn=0"
                                    class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            ${{ $item->bu_price }}
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">{{ $item->bu_name }}</a></h4>
                            <h5 class="m-0"><span class="text-muted"> {{ str_limit($item->bu_small_desc, 40) }}</span></h5>
                        </div>
                    </div>
                </div>
    @endforeach

@else

    <div class="alert alert-danger" style="margin-top: 20px">
        {{ trans('welcome.no_buildings_founded_msg') }}
    </div>

@endif

