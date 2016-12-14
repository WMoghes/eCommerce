<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ URL::to('website/assets/images/favicon.ico') }}">
    <title>{{ getSiteSettings() }}</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    {!! Html::style('website/assets/ar/css/bootstrap.min.css') !!}
            <!-- Owl Carousel CSS -->
    {!! Html::style('website/assets/ar/css/owl.carousel.css') !!}
    {!! Html::style('website/assets/ar/css/owl.theme.default.min.css') !!}
            <!-- Icon CSS -->
            <!-- Custom styles for this template -->
    {!! Html::style('website/assets/ar/css/style.css') !!}
    @yield('header')
    {!! Html::style('website/assets/ar/css/ar_style.css') !!}

</head>
<body data-spy="scroll" data-target="#navbar-menu" style="direction: rtl">


<!-- Navbar -->
<div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
    <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header pull-right">

            <!-- Responsive menu button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <a class="navbar-brand logo" href="{{ url('/') }}">
                WM<span class="text-custom">O</span>GHES
            </a>

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse pull-left" id="navbar-menu">

            <!-- Navbar right -->
            <ul class="nav navbar-nav navbar-left">

                <li class="active">
                    <a href="{{ url('/') }}" class="nav-link">{{ trans('welcome.home') }}</a>
                </li>
                <li><a href="{{ url('/buildings') }}">{{ trans('welcome.all_buildings') }}</a></li>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('welcome.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('welcome.register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('welcome.logout') }}</a></li>
                        </ul>
                    </li>
                @endif

            </ul>

        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- End navbar-custom -->

<div class="container">
    <div class="row" style="margin-top: 100px">
        @yield('content')
    </div>
</div>



        <!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 pull-right">
                <a class="navbar-brand logo" style="float: right" href="{{ url('/') }}">
                    WM<span class="text-custom">O</span>GHES
                </a>
            </div>
            <div class="col-lg-5 col-md-7 pull-left" style="margin-left: 0px">
                <ul class="nav navbar-nav">
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Clients</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
                <ul class="social-icons">
                    <li><a href="{{ getSiteSettings('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ getSiteSettings('twitter') }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ getSiteSettings('youtube') }}"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</footer>
<!-- End Footer -->

        <!-- js placed at the end of the document so the pages load faster -->
{!! Html::script('website/assets/js/jquery-2.1.4.min.js') !!}
{!! Html::script('website/assets/js/bootstrap.min.js') !!}

        <!-- Jquery easing -->
{!! Html::script('website/assets/js/jquery.easing.1.3.min.js') !!}

        <!-- Owl Carousel -->
{!! Html::script('website/assets/js/owl.carousel.min.js') !!}

        <!--sticky header-->
{!! Html::script('website/assets/js/jquery.sticky.js') !!}

        <!--common script for all pages-->
{!! Html::script('website/assets/js/jquery.app.js') !!}

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            }
        }
    })
</script>
@yield('script')
@yield('footer')
</body>
</html>
