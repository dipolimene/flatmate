@extends('layouts.master')
@section('title') Reset Password @endsection
@section('content')

    <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">

                            <form class="form" method="POST" action="{{ route('password.email') }}">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

                            {{ csrf_field() }}

                                <div class="header header-primary text-center">

                                    <h4>Reset Password</h4>

                                </div>

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

                                </div>

                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-link">Send Password Reset Link</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

@endsection