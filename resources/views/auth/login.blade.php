@extends('layouts.app')

@section('title')
    {{ trans('welcome.login') }}
@endsection

@section('header')
    {!! Html::style('admin/assets/css/bootstrap-rtl.min.css') !!}
@endsection

@section('content')
    <div class="row" style="margin-top: 20px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.login') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 control-label" style="text-align: right">{{ trans('welcome.email') }}</label>
                            <div class="col-sm-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="remember" id="checkbox">
                                    <label for="checkbox">{{ trans('welcome.remember_me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-sign-in"></i> {{ trans('welcome.login') }}
                                </button>
                                <a class="btn btn-link pull-left" href="{{ url('/password/reset') }}">{{ trans('welcome.forget') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
