

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>MJ DEVIGN</title>

    <link rel="stylesheet" href="{{ asset ( 'main/css/style.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/header.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-hero.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-quality.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-info.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-process.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-package.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-newyear.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-pricing.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-faq.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-support.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/footer.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/others/landingpage.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">
    <link rel="icon" href="{{ asset ( 'main/images/diamond.ico' ) }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        a:hover {
            text-decoration: none !important;
        }
    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
@include('components.login')
@include('components.register')
<header>

    <div class="section-container">

        <div class="logo">
            <img class="mr-10" src="{{ asset ( 'main/images/diamond.png' ) }}" alt="logo">
            <div class="logo-info">
                <p class="text-20px f-poppinsSemiBold text-white">MJ DEVIGN</p>
                <p class="text-17px f-hindVadodaraLight text-white">Design & Development Agency</p>
            </div>
        </div>

        <span class="toggler"></span>

        <nav>
            <ul class="f-montserratMedium">
                <li class="nav-link"><a href="/home">Home</a></li>
                <li class="nav-link"><a href="/about">About</a></li>
                <li class="nav-link"><a href="/packages">Package</a></li>
                <li class="nav-link"><a href="/pricing">Pricing</a></li>
                <li class="nav-link"><a href="/faq">FAQ</a></li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-link sign-in" >
                            <a id="Login_li_btn"
                               style="cursor: pointer"
                               data-toggle="modal"
                               data-target="#loginModal">{{ __('Sign In') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-link sign-in">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>


@yield('content')

<footer>
    <div class="section-container">
        <div class="col one">
            <div class="col-title">
                <img src="main/images/diamond.png" alt="">
                <p class="f-poppins text-700 text-20px">MJ DEVIGN</p>
            </div>
            <p class="info">Continually myocardinate inexpensive catalysts for change with seamless initiatives.</p>
            <div class="social-links">
                <span class="ti-facebook"></span>
                <span class="ti-twitter"></span>
                <span class="ti-linkedin"></span>
                <span class="ti-dribbble"></span>
            </div>
        </div>
        <div class="col two">
            <p class="col-title">COMPANY</p>
            <div class="col-content">
                <ul>
                    <li><a href="#">About Our Services</a></li>
                    <li><a href="#">Our Affiliates Program</a></li>
                    <li><a href="#">View Our Blog</a></li>
                    <li><a href="#">Check Our Careers</a></li>
                </ul>
            </div>
        </div>
        <div class="col three">
            <p class="col-title">LEGAL</p>
            <div class="col-content">
                <ul>
                    <li><a href="#">Legal Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Report Abuse</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="col four">
            <p class="col-title">GET IN TOUCH</p>
            <div class="col-content">
                <div class="address">
                    <span class="fas fa-map-marker-alt mr-2"></span>
                    <p>1234 Street Name, City Name, USA</p>
                </div>
                <div class="email">
                    <span class="fas fa-envelope mr-2"></span>
                    <p>1234 Street Name, City Name, USA</p>
                </div>
                <div class="subscribe">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" style="pointer-events: all; cursor: pointer;"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset ( 'main/js/header.js' ) }}"></script>
<script src="{{ asset ( 'main/js/package-controller.js' ) }}"></script>
<script src="{{ asset ( 'main/js/faq.js' ) }}"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>





</body>
</html>