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
                    <li class="nav-item active"><a href="/input" class="nav-link">Transactions</a></li>
                    <li class="nav-item"><a href="/users" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="/roles" class="nav-link">Roles</a></li>
                    <li class="nav-item"><a href="/accounting" class="nav-link">Accounting</a></li>
                    <li class="nav-item"><a href="/reports?transdate={{ date('Y-m-d', strtotime(now())) }}"
                            class="nav-link">Reports</a></li>
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

    <section style="margin-top: -90px;" class="ftco-section">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <button class="btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal"
                                data-target="#exampleModal">Add
                                Transaction</button>

                        </div>
                        <br>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table table-striped align-items-center mb-0" id="table-id">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Transaction Description</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Transaction Category</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Transaction Amount</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Transaction Date</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $t)
                                            <tr>
                                                <td>{{ $t['description'] }}</td>
                                                <td>{{ $t['category'] }}</td>
                                                <td>{{ $t['amount'] }}</td>
                                                <td>{{ $t['transactionDate'] }}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-success"
                                                        data-toggle="modal"
                                                        data-target="#viewModal{{ $t['transactionID'] }}">
                                                        View/Edit
                                                    </button>
                                                    <div class="modal fade" id="viewModal{{ $t['transactionID'] }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="viewModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="viewModalLabel">
                                                                        View/Edit Transaction</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <form autocomplete="off"
                                                                            action="{{ route('inputs.update', ['input' => $t['transactionID']]) }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="form-group"
                                                                                style="margin-left: 30px;">
                                                                                <label for="description"
                                                                                    class="description">Description</label>
                                                                                <input required type="text"
                                                                                    name="description" id=""
                                                                                    value="{{ $t['description'] }}">
                                                                            </div>
                                                                            <div class="form-group"
                                                                                style="margin-left: 30px;">
                                                                                <label for="category"
                                                                                    class="category">Category</label>
                                                                                <input required type="text"
                                                                                    name="category" id=""
                                                                                    style="margin-left: 17px;"
                                                                                    value="{{ $t['category'] }}">
                                                                            </div>
                                                                            <div class="form-group"
                                                                                style="margin-left: 30px;">
                                                                                <label for="amount"
                                                                                    class="amount">Amount</label>
                                                                                <input required type="number"
                                                                                    name="amount" id=""
                                                                                    style="margin-left: 23px;"
                                                                                    value="{{ $t['amount'] }}">
                                                                            </div>
                                                                            <div class="form-group"
                                                                                style="margin-left: 30px;">
                                                                                <label for="transdate"
                                                                                    class="transdate">Transaction
                                                                                    Date</label>
                                                                                <input required type="date"
                                                                                    name="transdate" id=""
                                                                                    value="{{ $t['transactionDate'] }}">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="btnUpdate" value="true">Update
                                                                        Input</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deleteTransModal{{ $t['transactionID'] }}">Delete</button>
                                                    <div class="modal fade"
                                                        id="deleteTransModal{{ $t['transactionID'] }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="deleteTransModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="/delete/transaction" method="POST">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <h5 class="modal-title"
                                                                            id="deleteTransModalLabel">
                                                                            Are You Sure You Want To Delete This
                                                                            Transaction ?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            name="btnDelete"
                                                                            value="{{ $t['transactionID'] }}">Yes,
                                                                            Proceed</button>
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!--		Start Pagination -->
                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
                                    {!! $transactions->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
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

                                                {{-- <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a>
                                                </li>
                                                <li><a href="#" class="py-1 d-block">Policies</a></li> --}}
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

    @if (session()->pull('successUpdateInput'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Updated Transaction',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successUpdateInput') }}
    @endif

    @if (session()->pull('successAddInput'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Added Transaction',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successAddInput') }}
    @endif

    @if (session()->pull('successDeleteTrans'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Deleted Transaction',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successDeleteTrans') }}
    @endif
    @if (session()->pull('errorDeleteTrans'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Failed To Delete Transaction',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorDeleteTrans') }}
    @endif

    @if (session()->pull('errorUpdateInput'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Failed To Update Transaction, Please Try Again',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorUpdateInput') }}
    @endif
    @if (session()->pull('errorAddInput'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Failed To Add Transaction',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorAddInput') }}
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form autocomplete="off" action="/inputs" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="description" class="description">Description</label>
                                <input required type="text" name="description" id="">
                            </div>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="category" class="category">Category</label>
                                <select name="category" id="category" style="margin-left: 17px;">
                                    <option value="Expenses">Expenses</option>
                                    <option value="Income">Income</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="amount" class="amount">Amount</label>
                                <input required type="number" name="amount" id=""
                                    style="margin-left: 23px;">
                            </div>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="transdate" class="transdate">Transaction Date</label>
                                <input required type="date" name="transdate" id="">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnAdd" value="true">Add
                        Transaction</button>
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
    <script>
        getPagination('#table-id');
        //getPagination('.table-class');
        //getPagination('table');

        /*					PAGINATION 
        - on change max rows select options fade out all rows gt option value mx = 5
        - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
        - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
        - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
        - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
        */


        function getPagination(table) {
            var lastPage = 1;

            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination

                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option

                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }

                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows

                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum;) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' +
                                    i +
                                    '">\
                                                                                                								  <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
                                                                                                								</li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number

                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }

                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass(
                            'active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(5)
                .change();

            // end of on select change

            // END OF PAGINATION
        }

        function limitPagging() {
            // alert($('.pagination li').length)

            if ($('.pagination li').length > 7) {
                if ($('.pagination li.active').attr('data-page') <= 3) {
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }
                if ($('.pagination li.active').attr('data-page') > 3) {
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($(
                            '.pagination li.active').attr('data-page')) + 2); i++) {
                        $('.pagination [data-page="' + i + '"]').show();

                    }

                }
            }
        }

        $(function() {
            // Just to append id number for each row
            $('table tr:eq(0)').prepend('<th> ID </th>');

            var id = 0;

            $('table tr:gt(0)').each(function() {
                id++;
                $(this).prepend('<td>' + id + '</td>');
            });
        });

        //  Developed By Yasser Mas
        // yasser.mas2@gmail.com
    </script>
</body>

</html>
