<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <title>Book Keeping</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-wrap">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <p class="mb-0 phone pl-md-2">
                                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>
                                        +639352012529</a>
                                    <a href="#"><span class="fa fa-paper-plane mr-1"></span>
                                        sanagustinvalencia08@gmail.com</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <p class="mb-0 d-flex">
                                        <a href="https://www.facebook.com/sapvalencia"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Book Keeping</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                    {{-- <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li> --}}
                    <li class="nav-item"><a href="#" data-toggle="modal" data-target="#loginModal"
                            class="nav-link">Login</a></li>
                    <!-- Modal -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(/storage/images/banner/1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>"Our heart is restless until it rests in Thee" (St. Augustine)</h2>
                                <h1 class="mb-4">San Agustin Parish Church</h1>
                                {{-- <p><a href="#" class="btn btn-white">Connect with us</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(/storage/images/banner/2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                {{-- <h2>We Support Business</h2> --}}
                                <h1 class="mb-4">Faith is to believe what you do not see; the reward of this faith is
                                    to see what you believe</h1>
                                {{-- <p><a href="#" class="btn btn-white">Connect with us</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(/storage/images/banner/3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Give Advice</h2>
                                <h1 class="mb-4">Spiritual Advice</h1>
                                <p><a href="#" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url(images/about.jpg);">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Accounting</span>
                        <h2 class="mb-4">We Are the Best Accounting Agency</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Market Analysis</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4>Accounting Advisor</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>General Consultancy</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accounting"></span></div>
                        <div class="text pl-4">
                            <h4>Structured Assestment</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section">
        <div class="container">
            {{-- <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                    the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                    the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                    the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>


    {{-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center">
                    <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st
                        Accounting Consultation</h2>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}


    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-9 py-5">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">About us</h2>
                            <p>"Our heart is restless until it rests in Thee" (St. Augustine).</p>
                            <ul class="ftco-footer-social p-0">
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip"
                                        data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="https://www.facebook.com/sapvalencia"
                                        data-toggle="tooltip" data-placement="top" title="Facebook"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip"
                                        data-placement="top" title="Instagram"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10">
                                    <div class="row">
                                        {{-- <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Services</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                                                <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                                                <li><a href="#" class="py-1 d-block">General Consultancy</a>
                                                </li>
                                                <li><a href="#" class="py-1 d-block">Structured Assestment</a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Discover</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="/about" class="py-1 d-block">About us</a></li>
                                                
                                                {{-- {{-- <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a>
                                                </li>
                                                <li><a href="#" class="py-1 d-block">Policies</a></li> --}} --}}
                                            </ul>
                                        </div>
                                        {{-- <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Resources</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Security</a></li>
                                                <li><a href="#" class="py-1 d-block">Global</a></li>
                                                <li><a href="#" class="py-1 d-block">Charts</a></li>
                                                <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-12">
                            <p class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                    <h2 class="footer-heading">Free consultation</h2>
                    <form action="#" class="form-consultation">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control submit px-3">Send A Message</button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </footer>

    @if (session()->pull('errorUserNotFound'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Wrong Username or Password, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 500);
        </script>;
        {{ session()->forget('errorUserNotFound') }}
    @endif


    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/login" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <center>
                                <div class="form-group">
                                    <input required type="text" style="width:350px;margin-left: 50px;"
                                        name="username" id="un" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input required type="password" style="width:350px;margin-left: 50px;"
                                        name="password" id="pw" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <span style="margin-left: 270px;cursor: pointer;"><a href="#"
                                            style="text-decoration: none;">Forgot
                                            Password?</a></span>
                                </div>
                            </center>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63856dbbdaff0e1306d9ee3e/1gj0j9atl';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
