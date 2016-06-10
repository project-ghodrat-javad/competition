@extends('layouts.headerNew')

@section('content')

        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <div class="col-md-7">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

            </div>

            <div class="col-md-5">
                <label for="email" style="padding-top: 10px;width: auto;float: right;margin-right: 40px" class="col-md-4 control-label">آدرس ایمیل</label>
            </div>

        </div>

        <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <div class="col-md-7">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="col-md-5">
                <label for="password" style="width: auto;padding-top: 10px;;float: right;margin-right: 40px"  class="col-md-4 control-label">رمز عبور</label>
            </div>

        </div>

        <div class="row form-group" style="margin-top: -20px">

            <div class="col-md-6 col-md-offset-5">
                <div class="checkbox">
                    <input type="checkbox" name="remember">
                    مرا به خاطر بسپار
                </div>
            </div>

        </div>

        <div class="row form-group">

            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-link" href="{{ url('/password/reset') }}">فراموشی رمز عبور</a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> ورود
                </button>
            </div>

        </div>


@endsection
