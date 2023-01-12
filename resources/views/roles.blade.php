<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <title>Roles</title>
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
                    <li class="nav-item"><a href="/users" class="nav-link">Users</a></li>
                    <li class="nav-item active"><a href="/roles" class="nav-link">Roles</a></li>
                    <li class="nav-item"><a href="/reports?transdate={{date('Y-m-d',strtotime(now()))}}" class="nav-link">Reports</a></li>
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
                                Roles</button>

                        </div>
                        <br>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table table-striped align-items-center mb-0" id="table-id">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Description</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access to Users</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access to Inputs</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Has Access to Chats</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $item)
                                            <tr>
                                                <td>{{ $item['description'] }}</td>
                                                <td>
                                                    @if ($item['users'] == 1)
                                                        True
                                                    @else
                                                        False
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item['inputs'] == 1)
                                                        True
                                                    @else
                                                        False
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item['chats'] == 1)
                                                        True
                                                    @else
                                                        False
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item['userType'] == 1)
                                                        <a class="btn btn-disabled"
                                                            style="color:gray;cursor: not-allowed;"
                                                            disabled>View/Edit</a>
                                                    @else
                                                        <a class="btn btn-success" style="color:white;"
                                                            data-toggle="modal"
                                                            data-target="#viewModal{{ $item['userType'] }}">View/Edit</a>
                                                        <div class="modal fade" id="viewModal{{ $item['userType'] }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="viewModalLabel{{ $item['userType'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="viewModalLabel{{ $item['userType'] }}">
                                                                            View/Edit Roles</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <form autocomplete="off"
                                                                                action="{{ route('roles.update', ['role' => $item['userType']]) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @method('put')
                                                                                @csrf
                                                                                <div class="form-group"
                                                                                    style="margin-left: 30px;">
                                                                                    <label for="fullname">Role
                                                                                        Description:</label>
                                                                                    <div class="autocomplete"
                                                                                        style="width:300px;">
                                                                                        <input required
                                                                                            style="width: 350px;"
                                                                                            id="roledesc"
                                                                                            type="text"
                                                                                            name="roledesc"
                                                                                            placeholder="Role Description"
                                                                                            title="Role Description"
                                                                                            value="{{ $item['description'] }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 30px;">
                                                                                    <p><b>Can access the following:</b>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 30px;">
                                                                                    @if ($item['users'] == 1)
                                                                                        <input style="cursor: pointer;"
                                                                                            type="checkbox"
                                                                                            name="checkusers"
                                                                                            id="checkmember" checked>
                                                                                    @else
                                                                                        <input style="cursor: pointer;"
                                                                                            type="checkbox"
                                                                                            name="checkusers"
                                                                                            id="checkmember">
                                                                                    @endif

                                                                                    <label for="checkmember"
                                                                                        for="checkmember">Users</label>
                                                                                    @if ($item['inputs'] == 1)
                                                                                        <input
                                                                                            style="cursor: pointer;margin-left: 20px;"
                                                                                            type="checkbox"
                                                                                            name="checkinput"
                                                                                            id="checkinput" checked>
                                                                                    @else
                                                                                        <input
                                                                                            style="cursor: pointer;margin-left: 20px;"
                                                                                            type="checkbox"
                                                                                            name="checkinput"
                                                                                            id="checkinput">
                                                                                    @endif

                                                                                    <label for="checkinput"
                                                                                        for="checkinput">Inputs</label>

                                                                                    @if ($item['chats'] == 1)
                                                                                        <input
                                                                                            style="cursor: pointer;margin-left: 20px;"
                                                                                            type="checkbox"
                                                                                            name="checkchats"
                                                                                            id="checkchats" checked>
                                                                                    @else
                                                                                        <input
                                                                                            style="cursor: pointer;margin-left: 20px;"
                                                                                            type="checkbox"
                                                                                            name="checkchats"
                                                                                            id="checkchats">
                                                                                    @endif

                                                                                    <label for="checkchats"
                                                                                        for="checkchats">Chats</label>
                                                                                </div>



                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($item['userType'] == 1)
                                                        <a class="btn btn-disabled"
                                                            style="color: gray;cursor: not-allowed;">Delete</a>
                                                    @else
                                                        <a class="btn btn-danger" style="color: white;"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $item['userType'] }}">Delete</a>
                                                        <div class="modal fade"
                                                            id="deleteModal{{ $item['userType'] }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="deleteModalLabel{{ $item['userType'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('roles.destroy', ['role' => $item['userType']]) }}"
                                                                        method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <h5 class="modal-title"
                                                                                id="deleteModalLabel{{ $item['userType'] }}">
                                                                                Do you want to
                                                                                proceed deleting this role ?</h5>
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
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--		Start Pagination -->
                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
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

    @if (session()->pull('successUpdateRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Updated Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successUpdateRole') }}
    @endif

    @if (session()->pull('successDeleteRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Deleted Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successDeleteRole') }}
    @endif

    @if (session()->pull('successAddRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Added Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('successAddRole') }}
    @endif

    @if (session()->pull('errorAddRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Failed To Add Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorAddRole') }}
    @endif

    @if (session()->pull('errorDeleteRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Failed To Delete Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorDeleteRole') }}
    @endif

    @if (session()->pull('errorUpdateRole'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Failed To Update Role',
                showConfirmButton: false,
                timer: 1300
            });
        </script>;
        {{ session()->forget('errorUpdateRole') }}
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Roles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form autocomplete="off" action="{{ route('roles.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="fullname">Role Description:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input required style="width: 350px;" id="roledesc" type="text"
                                        name="roledesc" placeholder="Role Description" title="Role Description">
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 30px;">
                                <p><b>Can access the following:</b></p>
                            </div>
                            <div class="form-group" style="margin-left: 30px;">
                                <input style="cursor: pointer;" type="checkbox" name="checkusers" id="checkmember">
                                <label for="checkmember" for="checkmember">Users</label>
                                <input style="cursor: pointer;margin-left: 20px;" type="checkbox" name="checkinput"
                                    id="checkinput">
                                <label for="checkinput" for="checkinput">Inputs</label>
                                <input style="cursor: pointer;margin-left: 20px;" type="checkbox" name="checkchats"
                                    id="checkchats">
                                <label for="checkchats" for="checkchats">Chats</label>
                            </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

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
