@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cus_f_name') ? ' has-error' : '' }}">
                            <label for="cus_f_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="cus_f_name" type="text" class="form-control" name="cus_f_name" value="{{ old('cus_f_name') }}" required autofocus>

                                @if ($errors->has('cus_f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cus_f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cus_l_name') ? ' has-error' : '' }}">
                            <label for="cus_l_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="cus_l_name" type="text" class="form-control" name="cus_l_name" value="{{ old('cus_l_name') }}" required autofocus>

                                @if ($errors->has('cus_l_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cus_l_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cus_address') ? ' has-error' : '' }}">
                            <label for="cus_address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="cus_address" type="text" class="form-control" name="cus_address" value="{{ old('cus_address') }}" required autofocus>

                                @if ($errors->has('cus_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cus_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cus_contact_no') ? ' has-error' : '' }}">
                            <label for="cus_contact_no" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input id="cus_contact_no" type="text" class="form-control" name="cus_contact_no" value="{{ old('cus_contact_no') }}" required autofocus>

                                @if ($errors->has('cus_contact_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cus_contact_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('distric_code') ? ' has-error' : '' }}">
                            <label for="ditric_code" class="col-md-4 control-label">Distric Code</label>

                            <div class="col-md-6">
                                <input id="distric_code" type="text" class="form-control" name="distric_code" value="{{ old('distric_code') }}" required autofocus>

                                @if ($errors->has('distric_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('distric_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
