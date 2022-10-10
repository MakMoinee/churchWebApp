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
            <form action="#" class="searchform order-sm-start order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="fa fa-search"></span></button>
                </div>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/inputs" class="nav-link">Inputs</a></li>
                    <li class="nav-item active"><a href="/users" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="/roles" class="nav-link">Roles</a></li>
                    <li class="nav-item"><a href="/reports" class="nav-link">Reports</a></li>
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
                                User</button>

                        </div>
                        <br>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table table-striped align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Username</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Role Description</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access To Member</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access To Inputs</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access To Announcements</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $role['username'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $role['description'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                @if ($role['members'] == 1)
                                                                    true
                                                                @else
                                                                    false
                                                                @endif
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                @if ($role['inputs'] == 1)
                                                                    true
                                                                @else
                                                                    false
                                                                @endif
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                @if ($role['announcements'] == 1)
                                                                    true
                                                                @else
                                                                    false
                                                                @endif
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    @if ($role['userType'] != 1)
                                                        @if ($hasAccess)
                                                            <button style="text-transform: none;"
                                                                class="btn badge-sm bg-gradient-success text-xs"
                                                                data-toggle="modal"
                                                                data-target="#viewModal{{ $role['id'] }}">View/Edit</button>
                                                            <button style="text-transform: none;margin-left: 10px;"
                                                                class="btn badge-sm bg-gradient-danger text-xs"
                                                                data-toggle="modal"
                                                                data-target="#deleteViewModal{{ $role['id'] }}">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade"
                                                                id="deleteViewModal{{ $role['id'] }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="deleteViewModalLabel{{ $role['id'] }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form
                                                                            action="{{ route('delete.user', ['id' => $role['uType']]) }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <h5 class="modal-title"
                                                                                    id="deleteViewModalLabel{{ $role['uType'] }}">
                                                                                    Do you want to
                                                                                    proceed deleting user ?</h5>
                                                                                <input type="hidden" name="roleid"
                                                                                    value="{{ $role['id'] }}">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Yes,
                                                                                    Proceed</button>
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="viewModal{{ $role['id'] }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="viewModalLabel{{ $role['id'] }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form autocomplete="off" action="/user/update"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="viewModalLabel{{ $role['id'] }}">
                                                                                    View/Edit
                                                                                    User</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="form-group">
                                                                                        <label for="username"
                                                                                            class="username">Username:</label>
                                                                                        <div class="autocomplete"
                                                                                            style="width:300px;">
                                                                                            <input type="hidden"
                                                                                                name="id"
                                                                                                value="{{ $role['id'] }}">
                                                                                            <input required
                                                                                                style="width: 350px;"
                                                                                                id="username"
                                                                                                type="text"
                                                                                                name="username"
                                                                                                placeholder="Username"
                                                                                                title="Username"
                                                                                                class="form-control"
                                                                                                value="{{ $role['username'] }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="password"
                                                                                            class="password">Password:</label>
                                                                                        <div class="autocomplete"
                                                                                            style="width:300px;">
                                                                                            <input required
                                                                                                style="width: 350px;"
                                                                                                id="txtPassword"
                                                                                                type="password"
                                                                                                name="password"
                                                                                                placeholder="Password"
                                                                                                title="Password"
                                                                                                class="form-control"
                                                                                                value="{{ $role['password'] }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cpassword"
                                                                                            class="cpassword">Confirm
                                                                                            Password:</label>
                                                                                        <div class="autocomplete"
                                                                                            style="width:300px;">
                                                                                            <input required
                                                                                                style="width: 350px;"
                                                                                                id="txtConfirmPassword"
                                                                                                type="password"
                                                                                                name="cpassword"
                                                                                                placeholder="Confirm Password"
                                                                                                title="Confirm Password"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="role"
                                                                                            for="role">User
                                                                                            Role:</label>
                                                                                        <select name="utype"
                                                                                            id="utype">
                                                                                            @foreach ($userTypes as $types)
                                                                                                @if ($role['uType'] == $types['uType'])
                                                                                                    <option
                                                                                                        value="{{ $types['uType'] }}"
                                                                                                        selected>
                                                                                                        {{ $types['description'] }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $types['uType'] }}">
                                                                                                        {{ $types['description'] }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Update
                                                                                    User</button>
                                                                            </div>
                                                                        </form>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <button disabled style="text-transform: none;"
                                                                class="btn badge-sm bg-gradient-success text-xs">View/Edit</button>
                                                            <button disabled
                                                                style="text-transform: none;margin-left: 10px;"
                                                                class="btn badge-sm bg-gradient-danger text-xs">
                                                                Delete
                                                            </button>
                                                        @endif
                                                    @else
                                                        <button disabled style="text-transform: none;"
                                                            class="btn badge-sm bg-gradient-success text-xs">View/Edit</button>
                                                        <button disabled
                                                            style="text-transform: none;margin-left: 10px;"
                                                            class="btn badge-sm bg-gradient-danger text-xs">
                                                            Delete
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
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
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
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
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Services</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                                                <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                                                <li><a href="#" class="py-1 d-block">General Consultancy</a>
                                                </li>
                                                <li><a href="#" class="py-1 d-block">Structured Assestment</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Discover</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">About us</a></li>
                                                <li><a href="#" class="py-1 d-block">Contract us</a></li>
                                                <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a>
                                                </li>
                                                <li><a href="#" class="py-1 d-block">Policies</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Resources</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Security</a></li>
                                                <li><a href="#" class="py-1 d-block">Global</a></li>
                                                <li><a href="#" class="py-1 d-block">Charts</a></li>
                                                <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                            </ul>
                                        </div>
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
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib.com</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
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
                </div>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form autocomplete="off" action="/users" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="username" style="margin-left: 50px;" class="username">Username:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input required style="width:350px;margin-left: 50px;" id="username"
                                        type="text" name="username" placeholder="Username" title="Username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" style="margin-left: 50px;" class="password">Password:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input required style="width:350px;margin-left: 50px;" id="txtPassword"
                                        type="password" name="password" placeholder="Password" title="Password"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpassword" style="margin-left: 50px;" class="cpassword">Confirm
                                    Password:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input required style="width:350px;margin-left: 50px;" id="txtConfirmPassword"
                                        type="password" name="cpassword" placeholder="Confirm Password"
                                        title="Confirm Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role" style="margin-left: 50px;" for="role">User Role:</label>
                                <select name="utype" id="utype">
                                    @foreach ($userTypes as $types)
                                        <option value="{{ $types['uType'] }}">{{ $types['description'] }}</option>
                                    @endforeach
                                </select>

                            </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
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
</body>

</html>
