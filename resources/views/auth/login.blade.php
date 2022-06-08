@extends('base')

@section('title', 'Login')

@section('content')

<section id="form"><!--form-->
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Login to your account</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <input @error('email') class="autu__input_error" @enderror type="email" name="email" value="{{ old('email') }}"  placeholder="Email address" />
                @error('email')
                    <span class="auth__message">! {{ $message }}</span>
                @enderror

                <input @error('password') class="autu__input_error" @enderror type="password" name="password" placeholder="Password" />
                @error('password')
                    <span class="auth__message">! {{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-default">Login</button>
                <div class="auth-block auth-block_margin">
                    <span>Don't have an account?</span>
                    <a href="{{ route('register' )}}" class="auth__link">Sign up</a>
                </div>
            </form>
        </div><!--/login form-->
    </div>
</section><!--/form-->

@endsection