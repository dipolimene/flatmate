@extends('layouts.master')
@section('title') Password Reset @endsection
@section('content')

    <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">

                            <form class="form" method="POST" action="{{ route('password.request') }}">

                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                                <div class="header header-primary text-center">

                                    <h4>Password Reset</h4>

                                </div>

                                <div class="content">

                                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                    </div>

                                    <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password" placeholder="Password" class="form-control" required />
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                    </div>

                                    <div class="input-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required />
                                    </div>

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-link">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

@endsection