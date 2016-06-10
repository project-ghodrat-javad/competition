@extends('layouts.headerNew')

@section('content')


                            <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          
                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
								<div class="col-md-5">
                                    <label for="email" style="float: right;padding-top: 10px ; width: auto" class="col-md-4 control-label"> نام و نام خانوادگی</label>
                                </div>
                            </div>

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
                                    <label for="email" style="padding-top: 10px;width: auto;float: right" class="col-md-4 control-label">آدرس ایمیل</label>
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
                                    <label for="password" style="padding-top: 10px;width: auto;float: right"  class="col-md-4 control-label">رمز عبور</label>
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                               
                                <div class="col-md-7">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
								<div class="col-md-5">
                                    <label for="email" style="padding-top: 10px;width: auto;float: right" class="col-md-4 control-label"> تکرار رمز عبور</label>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> ثبت نام
                                    </button>
                                </div>
                            </div>
		
@endsection





