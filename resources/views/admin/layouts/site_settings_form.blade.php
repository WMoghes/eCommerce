{!! Form::open(['class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'url' => route('site.settings')]) !!}
@foreach($siteSettings as $setting)
        @if( $setting->type == 0)
            <div class="form-group{{ $errors->has($setting->namesetting) ? ' has-error' : '' }}">
                <div class="col-sm-10 pull-right">
                    {!! Form::text($setting->namesetting, $setting->value, ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => $setting->slug ]) !!}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first($setting->namesetting) }}</strong>
                        </span>
                    @endif
                </div>
                <label for="{{ $setting->namesetting }}" class="col-sm-2 control-label" style="text-align: right">{{ $setting->slug }}</label>
            </div>
        @else
            <div class="form-group{{ $errors->has($setting->value) ? ' has-error' : '' }}">

                <div class="col-sm-10 pull-right">
                    {!! Form::textarea($setting->namesetting, $setting->value, ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => $setting->slug , 'rows' => 2]) !!}

                    @if ($errors->has($setting->value))
                        <span class="help-block">
                            <strong>{{ $errors->first($setting->value) }}</strong>
                        </span>
                    @endif
                </div>
                <label for="{{ $setting->namesetting }}" class="col-sm-2 control-label"  style="text-align: right">{{ $setting->slug }}</label>
            </div>
        @endif
@endforeach
<button type="submit" class="btn btn-primary pull-right">
    {{ trans('welcome.save') }}
    <i class="fa fa-btn fa-save" style="margin-right: 10px"></i>
</button>
{!! Form::close() !!}

