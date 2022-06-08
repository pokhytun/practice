@extends('base')

@section('title', 'Register')

@section('content')

<section id="form"><!--form-->
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>New User Signup!</h2>
				<form action="{{ route('register') }}" method="POST">
                    @csrf

					<input type="text" name="login" placeholder="Login" value="{{ old('login') }}" />
                    @error('login')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror

					<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" />
                    @error('email')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror

					<input type="password" name="password" placeholder="Password"/>
                    @error('password')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror
                    <input id="password-confirm" type="password"  name="password_confirmation"  placeholder="Password confirmation">

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