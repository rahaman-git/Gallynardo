@extends('master')

@section('content')
    <div class="jumbotron col-sm-6 col-sm-push-3" style="margin-top: 5em">
        <h1>Login</h1>

        <form action="{{ url('user/do-login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" />
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" />
            </div>

            <div class="form-group">
                <input type="submit" id="login-btn" name="login" value="Login" class="btn btn-primary" />
            </div>

        </form>
    </div>
@endsection