@extends('base')

@section('title', 'Login')

@section('content')

<section id="form"><!--form-->
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Login to your account</h2>
            <form action="#">
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email Address" />
                <button type="submit" class="btn btn-default">Login</button>
                <div class="auth-block auth-block_margin">
                    <span>Don't have an account?</span>
                    <a href="#" class="auth__link">Sign up</a>
                </div>
                
            </form>
        </div><!--/login form-->
    </div>
</section><!--/form-->

@endsection