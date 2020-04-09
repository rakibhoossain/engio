<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fundee - NonProfit Charity HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900|Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('css/frontend.css')}}">

    </head>
    <body>

        <!-- header-start -->
        <header>
            <div class="header-top-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-5 col-8 d-flex align-items-center">
                            <div class="header-top-wrapper">
                                <div class="header-info">
                                    <span class="mail-header-icon"><i class="far fa-clock"></i> Mon - Fri: 9:00 - 19:00 / Closed on Weekends</span>
                                    <span><i class="far fa-envelope-open"></i> <a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45363035352a3731053728242c296b262a28">[email&#160;protected]</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-7 col-4">
                            <div class="header-top-right">
                                <div class="header-login f-right">
                                    <a href="#"><i class="far fa-user"></i> Login</a>
                                </div>
                                <div class="header-icon f-right d-none d-md-block">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-menu-area green-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 d-flex align-items-center">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="assets/img/logo/logo-white.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu text-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{route('home')}}">হোম</a> </li>
                                        <li><a href="{{route('coronavirus')}}">করোনা আপডেট </a> </li>
                                        <li><a href="{{route('about')}}">আমাদের সম্পর্কে </a> </li>
                                        <li><a href="{{route('contact')}}">যোগাযোগ করুন </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="header-right">
                                <div class="header-right-info f-right d-none d-lg-block">
                                    <div class="header-right-text text-right f-left">
                                        <h5>যোগাযোগ</h5>
                                        <span>+1234567899</span>
                                    </div>
                                    <div class="heder-right-icon f-right">
                                        <img src="assets/img/icon/icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-start -->

        <main>
            @yield('content')
        </main>

        <!-- footer-area-start -->
        <footer>
            <div class="footer-top-area black-soft-bg pt-50 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-2">
                            <div class="footer-logo mb-30">
                                <a href="index.html"><img src="assets/img/logo/logo-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="footer-icon mb-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="footer-img mb-30">
                                <a href="#"><img src="assets/img/footer/01.png" alt=""></a>
                                <a href="#"><img src="assets/img/footer/02.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-area pt-80 pb-25" style="background-image:url(assets/img/bg/bg-05.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Contact Us</h3>
                                <ul class="contact-link">
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-map-marker-alt"></i>

                                        </div>
                                        <div class="contact-address-text">
                                            <span>26 Simpson Avenue <br> Harrisburg,  USA</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9be8eeebebf4e9efdbfcf6faf2f7b5f8f4f6">[email&#160;protected]</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>+012 (3456) 7788</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Company</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our History</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Meet Doctors</a></li>
                                        <li><a href="#">Success History</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper pl-80 mb-30">
                                <h3 class="footer-title">Quick Link</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">Need A Job ?</a></li>
                                        <li><a href="#">Become A Menber ?</a></li>
                                        <li><a href="#">Appointment</a></li>
                                        <li><a href="#">Our Store</a></li>
                                        <li><a href="#">Setting & Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6">
                            <div class="footer-wrapper pl-70 mb-30">
                                <h3 class="footer-title">Photo Gallery</h3>
                                <ul class="footer-2-img">
                                    <li><a href="#"><img alt="" src="assets/img/instagram/01.jpg"> </a> </li>
                                    <li><a href="#"><img alt="" src="assets/img/instagram/02.jpg"></a></li>
                                    <li><a href="#"><img alt="" src="assets/img/instagram/03.jpg"></a></li>
                                    <li><a href="#"><img alt="" src="assets/img/instagram/04.jpg"></a></li>
                                    <li><a href="#"><img alt="" src="assets/img/instagram/05.jpg"></a></li>
                                    <li><a href="#"><img alt="" src="assets/img/instagram/06.jpg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-area pt-25 mt-45">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="copyright text-center">
                                    <p><i class="far fa-copyright"></i> 2020 <a href="#">Fundee.</a> All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->



		<!-- JS here -->
        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->



        <script src="{{asset('js/frontend.js')}}"></script>
        @stack('scripts')
    </body>
</html>