@extends('layouts.master')
@section('title') Log In @endsection
@section('content')

    <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">

                            <form class="form" method="POST" action="">

        @if($msg = Session::get('message'))
                    
        {{ $msg }}
            
        @endif
                            {{ csrf_field() }}

                                <div class="header header-primary text-center">

                                    <h4>Log In</h4>
                                    <div class="social-line">
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>

                                <p class="text-divider">Or</p>
                                <div class="content">

                                    <div class="input-group">
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

                                    <div class="input-group">
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

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked>
                                            Remember Me
                                        </label>
                                    </div>

                                </div>

                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-link">Log In</button>
                                    <br>
                                    <a class="btn btn-simple btn-primary btn-lg" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

@endsection