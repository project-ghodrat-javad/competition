@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading loginheader" style="direction:rtl">صفحه ورود </div>
                <a href="social/google">G+</a>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="float: right;margin-right: 120px;direction: rtl;">ایمیل :</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" style="margin-left: 100px;text-align: right;">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>ایمیل وارد شده نادرست می باشد</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="float: right;margin-right: 120px;direction: rtl;">گذر واژه :</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" style="margin-left: 100px;text-align: right;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>رمز وارد شده نادرست می باشد
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">مرا به خاطر بسپار 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>ورود
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">گذرواژه رو فراموش کرده ام ؟</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
