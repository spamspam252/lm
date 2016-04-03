@extends('master')

@section('content')
<main class="container">
    <div class="row">
        <div class="col s6 offset-s3">
            <h3 class="center-align">Login</h3>
            <form id="login-form" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" class="right-alert" >
                {!! csrf_field() !!}

                <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="material-icons prefix">perm_identity</i>
                    <label for="email" data-error="Please enter your email">E-Mail Address</label>

                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required aria-required="true">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
                      <i class="material-icons prefix">lock_outline</i>
                      <label class="col-md-4 control-label">Password</label>
                        <input type="password" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="input-field center-align">
                    <button type="submit" class="btn waves-effect waves-light"> Login
                      <i class="material-icons right">input</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
