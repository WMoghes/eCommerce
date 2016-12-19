<div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::text('bu_name', $building->bu_name, ['class' => 'form-control', 'autocomplete' => 'off']) !!}

        @if ($errors->has('bu_name'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_name') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_name" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.building_name') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::text('bu_price', $building->bu_price, ['class' => 'form-control', 'autocomplete' => 'off']) !!}

        @if ($errors->has('bu_price'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_price') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_price" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_price') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_region') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::select('bu_region', bu_places(), $building->bu_region, ['class' => 'selectpicker select', 'data-style' => 'btn-white']) !!}

        @if ($errors->has('bu_region'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_region') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_region" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_region') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::text('bu_square', $building->bu_square, ['class' => 'form-control', 'autocomplete' => 'off']) !!}

        @if ($errors->has('bu_square'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_square') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_square" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.building_square') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_room') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::select('bu_room', getRoomsNumber(), $building->bu_room, ['class' => 'selectpicker select', 'data-style' => 'btn-white']) !!}

        @if ($errors->has('bu_room'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_room') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_room" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_room_num') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_small_desc') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::textarea('bu_small_desc', $building->bu_small_desc, ['class' => 'form-control', 'autocomplete' => 'off', 'rows' => 2]) !!}

        @if ($errors->has('bu_small_desc'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_small_desc') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_small_desc" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.building_small_desc') }}</label>
</div>

<div class="alert alert-warning col-sm-9 pull-right">
    <span>
        <p>{{ trans('welcome.tip_about_small_desc') }}</p>
    </span>
</div>

<div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::textarea('bu_meta', $building->bu_meta, ['class' => 'form-control', 'autocomplete' => 'off', 'rows' => 2]) !!}

        @if ($errors->has('bu_meta'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_meta') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_meta" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_meta') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_longitude') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::text('bu_longitude', $building->bu_longitude, ['class' => 'form-control', 'autocomplete' => 'off']) !!}

        @if ($errors->has('bu_longitude'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_longitude') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_longitude" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.longitude') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::text('bu_latitude', $building->bu_latitude, ['class' => 'form-control', 'autocomplete' => 'off']) !!}

        @if ($errors->has('bu_latitude'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_latitude') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_latitude" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.latitude') }}</label>
</div>

<div class="form-group">
    <div class="col-sm-9 pull-right">
        {!! Form::select('bu_rent', getBuildingRentType(), $building->bu_rent, ['class' => 'selectpicker', 'data-style' => 'btn-white']) !!}
    </div>
    <label for="bu_rent" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_rent_select') }}</label>
</div>

<div class="form-group">
    <div class="col-sm-9 pull-right">
        {!! Form::select('bu_type', getBuildingType(), $building->bu_type, ['class' => 'selectpicker', 'data-style' => 'btn-white']) !!}
    </div>
    <label for="bu_type" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.building_type_select') }}</label>
</div>

<div class="form-group">
    <div class="col-sm-9 pull-right">
        {!! Form::select('bu_status', getStatus(), $building->bu_status, ['class' => 'selectpicker', 'data-style' => 'btn-white']) !!}
    </div>
    <label for="bu_status" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.status_select') }}</label>
</div>

<div class="form-group{{ $errors->has('bu_long_desc') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::textarea('bu_long_desc', $building->bu_long_desc, ['class' => 'form-control', 'autocomplete' => 'off', 'rows' => 3]) !!}

        @if ($errors->has('bu_long_desc'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_long_desc') }}</strong>
            </span>
        @endif
    </div>
    <label for="bu_long_desc" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.building_long_desc') }}</label>
</div>
<div class="row">
    <div class="col-md-8">
        <p>{{ trans('welcome.image_rules') }}</p>
        <br>
        <label class="btn btn-primary">
            {{ trans('welcome.upload_image') }} <input type="file" id="imageUpload" name="image" style="display: none">
        </label>
    </div>
    <div class="col-md-4">
        <img id="bu_image" src="{{ ($building->image == '') ? getSiteSettings('default_image') : URL::to('website/images/') . '/' . $building->image}}" alt="Your-image" height="300" width="300" class="img-responsive">
        <br>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary pull-right">
            {{ trans('welcome.update') }}
            <i class="fa fa-btn fa-save" style="margin-right: 10px"></i>
        </button>
    </div>
</div>

