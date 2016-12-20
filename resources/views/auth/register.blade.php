@extends('layouts.app')

@section('title')
    {{ trans('welcome.register') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/css/bootstrap-rtl.min.css') !!}
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.register') }}</div>
                <div class="panel-body">
                    {!! Form::open(['class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'url' => url('/register')]) !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.name') }}</label>
                            <div class="col-sm-9">
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.email') }}</label>
                            <div class="col-sm-9">
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) !!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.password') }}</label>
                            <div class="col-sm-9">
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.cpassword') }}</label>
                            <div class="col-sm-9">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm']) !!}

                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-user"></i> {{ trans('welcome.register') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
