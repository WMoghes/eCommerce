
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-9 pull-right">
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'autocomplete' => 'off']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <label for="name" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.name') }}</label>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'autocomplete' => 'off']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <label for="email" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.email') }}</label>
</div>

<div class="form-group">
    <div class="col-sm-9 pull-right">
        {!! Form::select('admin', ['0' => 'مستخدم', '1' => 'مدير'], null, ['class' => 'selectpicker', 'data-style' => 'btn-white']) !!}
    </div>
    <label for="admin" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.select_role') }}</label>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'autocomplete' => 'off']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <label for="password" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.password') }}</label>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

    <div class="col-sm-9 pull-right">
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'autocomplete' => 'off']) !!}

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
    <label for="password-confirm" class="col-sm-3 control-label"  style="text-align: right">{{ trans('welcome.cpassword') }}</label>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary pull-right">
            <i class="fa fa-btn fa-user"></i> {{ trans('welcome.register') }}
        </button>
    </div>
</div>

