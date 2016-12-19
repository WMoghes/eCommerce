<div class="panel panel-primary">
    <div class="panel panel-heading">
        {{ trans('welcome.advanced_search') }}
    </div>
    <div class="panel panel-body" style="margin-bottom: 0">
        {!! Form::open(['method' => 'get', 'role' => 'form', 'url' => route('frontend.buildings.search')]) !!}
            <div class="form-group">
                {!! Form::text('bu_name', retriveValue('bu_name'), ['class' => 'form-control', 'placeholder' => trans('welcome.building_name')]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('bu_type', getBuildingType(), retriveValue('bu_type'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_type_select')]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('bu_rent', getBuildingRentType(), retriveValue('bu_rent'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_rent_select')]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('bu_room', getRoomsNumber(), retriveValue('bu_room'), ['class' => 'selectpicker select','data-style' => 'btn-white', 'placeholder' => trans('welcome.building_select_rooms')]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('bu_region', bu_places(), retriveValue('bu_region'), ['class' => 'selectpicker select', 'data-style' => 'btn-white', 'placeholder' => trans('welcome.building_select_region')]) !!}
            </div>
            <div class="form-group" style="direction: ltr">
                <label class="pull-right" for="range_03">{{ trans('welcome.select_price') }}</label>
                <br>
                <input name="range" type="text" id="range_03" min="{{ minRange() }}" max="{{ maxRange() }}">
            </div>
{{--        {!! Form::submit(trans('welcome.search'), ['class' => 'btn btn-primary pull-left']) !!}--}}
            <button type="submit" class="btn btn-primary pull-left">{{ trans('welcome.search') }}</button>
        {!! Form::close() !!}
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel panel-heading">
        {{ trans('welcome.buildings_choice') }}
    </div>
    <div class="panel panel-body" style="margin-bottom: 0">
            <a class="a-hover" href="{{ route('frontend.buildings') }}">
                <li class="remove-point">
                    {{ trans('welcome.all_buildings') }}
                    <span class="label label-primary pull-left">{{ $info['activeStatuscount'] }}</span>
                </li>
            </a>
            <hr class="set-hr">
            <a class="a-hover" href="{{ route('frontend.building-type.buildings', $id = 0) }}">
                <li class="remove-point">
                    {{ trans('welcome.apartment') }}
                    <span class="label label-primary pull-left">{{ $info['apartmentsCount'] }}</span>
                </li>
            </a>
            <hr class="set-hr">
            <a class="a-hover" href="{{ route('frontend.building-type.buildings', $id = 1) }}">
                <li class="remove-point">
                    {{ trans('welcome.villa') }}
                    <span class="label label-primary pull-left">{{ $info['villaCount'] }}</span>
                </li>
            </a>
            <hr class="set-hr">
            <a class="a-hover" href="{{ route('frontend.building-type.buildings', $id = 2) }}">
                <li class="remove-point">
                    {{ trans('welcome.chalet') }}
                    <span class="label label-primary pull-left">{{ $info['chaletCount'] }}</span>
                </li>
            </a>
            <hr class="set-hr">
            <a class="a-hover" href="{{ route('frontend.type-rent.buildings', $id = 0) }}">
                <li class="remove-point">
                    {{ trans('welcome.rent') }}
                    <span class="label label-primary pull-left">{{ $info['rentCount'] }}</span>
                </li>
            </a>
            <hr class="set-hr">
            <a class="a-hover" href="{{ route('frontend.type-rent.buildings', $id = 1) }}">
                <li class="remove-point">
                    {{ trans('welcome.ownership') }}
                    <span class="label label-primary pull-left">{{ $info['ownershipCount'] }}</span>
                </li>
            </a>
    </div>
</div>