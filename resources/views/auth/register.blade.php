@extends('base')

@section('title', 'Register')

@section('content')

<section id="form"><!--form-->
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>New User Signup!</h2>
				<form action="{{ route('register') }}" method="POST">
                    @csrf

					<input @error('login') class="autu__input_error" @enderror type="text" name="login" placeholder="Login" value="{{ old('login') }}" />
                    @error('login')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror

					<input @error('email') class="autu__input_error" @enderror type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" />
                    @error('email')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror

					<input @error('password') class="autu__input_error" @enderror type="password" name="password" placeholder="Password"/>
                    <input @error('password-confirm') class="autu__input_error" @enderror id="password-confirm" type="password"  name="password_confirmation"  placeholder="Password confirmation">
                    @error('password')
                        <span class="auth__message">! {{ $message }}</span>
                    @enderror

					<button type="submit" class="btn btn-default">Signup</button>
				</form>
                <div class="auth-block auth-block_margin">
                    <span>Have an account?</span>
                    <a href="{{route('login')}}" class="auth__link"> Sign in</a>
                </div>
        </div><!--/login form-->
    </div>
</section><!--/form-->

@endsection