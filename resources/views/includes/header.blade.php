<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ route('home') }}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav navbar_auth">
                            <li><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> Cart <span id="cart-size"> @if(session('cart'))  {{ count(session('cart')) }} @else 0 @endif  </span></a></li>

                            @auth
                                <li><a href="{{ route('order.index' )}}"><i class="fa fa-user"></i> {{ Auth()->user()->login }} </a></li>
                                <li>
                                    <form action=" {{route('logout')}} " method="POST">
                                        @csrf

                                        <input type="submit" value="logout">
                                    </form>
                                </li>


                            @endauth
                            @guest
                                <li><a href=" {{ route('login') }} "><i class="fa fa-lock"></i> Login</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route("home")}}">Home</a></li>
                            <li class="dropdown"><a href="{{ route('products.index') }}">Shop</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form action="{{ route('products.index') }}" class="search_box pull-right">
                        <input name="search_field" type="text" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif placeholder="Search"/>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
