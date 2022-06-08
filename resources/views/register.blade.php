@extends('base')

@section('title', 'Register')

@section('content')

<section id="form"><!--form-->
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>New User Signup!</h2>
				<form action="#">
					<input type="text" placeholder="Name"/>
					<input type="email" placeholder="Email Address"/>
					<input type="password" placeholder="Password"/>
					<button type="submit" class="btn btn-default">Signup</button>
				</form>
                <div class="auth-block auth-block_margin">
                    <span>Have an account?</span>
                    <a href="#" class="auth__link"> Sign in</a>
                </div>
        </div><!--/login form-->
    </div>
</section><!--/form-->

@endsection