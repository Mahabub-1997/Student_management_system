<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg  bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Student Add Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('manage')}}">Student Manage Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dept.add')}}">Department Add From</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('manage.dept')}}">Department Manage Table</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>

@yield('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <footer id="footer" class="footer dark-background bg-dark-subtle bg-primary">
                <div class="footer-top">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6 footer-about">
                                <a href="index.html" class="logo d-flex align-items-center">
                                    <span class="sitename">BlogSite</span>
                                </a>
                                <div class="footer-contact pt-3">
                                    <p>Green road, Cresent Road</p>
                                    <p>Bangladesh, 129 </p>
                                    <p class="mt-3"><strong>Phone:</strong> <span>+8801768198718</span></p>
                                    <p><strong>Email:</strong> <span>lizukhan13@gmail.com</span></p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('home')}}">Add Blog</a></li>
                                    <li><a href="">Manage Blog</a></li>
                                    <li><a href="#">Terms of service</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>My Works</h4>
                                <ul>
                                    <li><a href="#">Html5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">PHP</a></li>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">Laravel</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>My Project</h4>
                                <ul>
                                    <li><a href="#">Blog-Site</a></li>
                                    <li><a href="#">E-commerce</a></li>
                                    <li><a href="#">Medicel Management</a></li>
                                    <li><a href="#">Air-ticket Booking</a></li>
                                    <li><a href="#">Cv- Bachai</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Education </h4>
                                <ul>
                                    <li><a href="#">Dhanmondi boys</a></li>
                                    <li><a href="#">Dhaka Collage</a></li>
                                    <li><a href="#">North South University</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="copyright text-center">
                    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <div>
                                © Copyright <strong><span>Lizu</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>

                        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

            </footer>
        </div>

    </div>
</div>
<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
