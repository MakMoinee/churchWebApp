<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <title>Dashboard</title>
    <meta charset="utf-8">
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
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/inputs" class="nav-link">Transactions</a></li>
                    @if ($hasAccessUsers)
                        <li class="nav-item"><a href="/users" class="nav-link">Users</a></li>
                    @endif

                    <li class="nav-item"><a href="/roles" class="nav-link">Roles</a></li>
                    <li class="nav-item"><a href="/accounting" class="nav-link">Accounting</a></li>
                    <li class="nav-item active"><a href="/reports" class="nav-link">Reports</a></li>
                    <li class="nav-item"><a href="https://dashboard.tawk.to/#/admin/63856d77daff0e1306d9ee2d"
                            target="_blank" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a href="#" data-toggle="modal" data-target="#logOutModal"
                            class="nav-link">Logout</a></li>
                    <!-- Modal -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section style="margin-top: -90px;" class="ftco-section" id="myCard">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <div class="col-lg-10">
                            <div class="card mb-4" >
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4 class="card-title mb-0">Transactions</h4>
                                            <div class="small text-medium-emphasis">January - December
                                                {{ date('Y', strtotime(now())) }}</div>
                                        </div>
                                        <div class="btn-toolbar d-none d-md-block" role="toolbar"
                                            aria-label="Toolbar with buttons">
                                            <form action="/reports" method="get">
                                                <div class="btn-group btn-group-toggle mx-3"
                                                    data-coreui-toggle="buttons">
                                                    {{-- <input class="btn-check" id="option1" type="radio"
                                                        name="options" autocomplete="off">
                                                    <label class="btn btn-outline-secondary" style="margin-left: 10px;"> Day</label> --}}
                                                    {{-- <input class="btn-check" id="option2" type="radio"
                                                        name="options" autocomplete="off" checked=""
                                                        style="margin-left: 10px;">
                                                    <label class="btn btn-outline-secondary active"
                                                        style="margin-left: 10px;"> Month</label> --}}
                                                    <input style="float:left;" class="form-control" type="date"
                                                        name="transdate" id=""
                                                        value="{{ date('Y-m-d', strtotime($transDate)) }}">
                                                    <button style="float: left;" class="btn btn-primary"
                                                        type="submit">Enter</button>
                                                    {{-- <input class="btn-check" id="option3" type="radio"
                                                        name="options" autocomplete="off" style="margin-left: 10px;">
                                                    <label class="btn btn-outline-secondary" style="margin-left: 10px;"> Year</label> --}}
                                                </div>
                                                <button class="btn btn-primary" type="button"
                                                    data-coreui-toggle="modal" data-coreui-target="#showModuleModal"
                                                    onclick="printModuleData()">
                                                    Print
                                                </button>
                                            </form>


                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper" style="height:auto;margin-top:40px;">
                                        <center>
                                            <canvas class="chart" id="main-chart2" height="403" width="403"
                                                style="display: block; box-sizing: border-box;"></canvas>
                                        </center>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row row-cols-1 row-cols-md-5 text-center">
                                        <div class="col mb-sm-2 mb-0">
                                            {{-- <div class="text-medium-emphasis"></div> --}}
                                            <div class="fw-semibold"><b>Income:</b> PHP {{ $income }}
                                                ({{ $incomePercent }}%)
                                            </div>
                                            <div class="progress progress-thin mt-2">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: {{ $incomePercent }}%" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col mb-sm-2 mb-0">
                                            {{-- <div class="text-medium-emphasis">Expenses</div> --}}
                                            <div class="fw-semibold"><b>Expenses:</b> PHP {{ $expense }}
                                                ({{ $expensePercent }}%)
                                            </div>
                                            <div class="progress progress-thin mt-2">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: {{ $expensePercent }}%" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>


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
                                                {{-- <li><a href="#" class="py-1 d-block">Contact us</a></li> --}}
                                            </ul>
                                        </div>
                                        {{-- {{-- <div class="col-md-4 mb-md-0 mb-4">
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

    @if (session()->pull('successLogin'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Login',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successLogin') }}
    @endif

    <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="logOutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/logout" method="GET">
                    <div class="modal-body">
                        <h5 class="modal-title" id="logOutModalLabel">Do you want to proceed logging out ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        var month = {!! json_encode($monthArr, true) !!};
        let monthData = []
        if (month) {
            for (let i = 0; i < 12; i++) {
                let key = i + 1;
                if (month.hasOwnProperty(key.toString())) {
                    monthData.push(month[key]);
                } else {
                    monthData.push(0);
                }
            }
        }

        const labels = [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Transactions',
                backgroundColor: [
                    'rgb(252, 186, 3)',
                    'rgb(0, 186, 242)',
                    'rgb(0, 209, 59)',
                    'rgb(199, 0, 56)',
                    'rgb(240, 0, 20)',
                    'rgb(123, 255, 0)',
                    'rgb(144, 0, 255)',
                    'rgb(252, 102, 3)',
                    'rgb(145, 175, 184)',
                    'rgb(205, 255, 143)',
                    'rgb(158, 0, 137)',
                    'rgb(255, 99, 132)',
                ],
                borderColor: [
                    'rgb(252, 186, 3)',
                    'rgb(0, 186, 242)',
                    'rgb(0, 209, 59)',
                    'rgb(199, 0, 56)',
                    'rgb(240, 0, 20)',
                    'rgb(123, 255, 0)',
                    'rgb(144, 0, 255)',
                    'rgb(252, 102, 3)',
                    'rgb(145, 175, 184)',
                    'rgb(205, 255, 143)',
                    'rgb(158, 0, 137)',
                    'rgb(255, 99, 132)',
                ],
                data: monthData,
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        };
        new Chart(
            document.getElementById('main-chart2'),
            config
        );

        function printModuleData() {
            // var printContents = document.getElementById('myCard').innerHTML;
            // var originalContents = document.body.innerHTML;
            // document.body.innerHTML = printContents;
            window.print();
            // document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>
