<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Finder Services</title>
</head>

<body>
    <!-- nav bar -->

    <nav class="navbar navbar-expand-md border-bottom  bg-white text-black navbar-light  d-flex flex-row ">
        <div class="container-fluid container-lg ">
            <a class="navbar-brand font-lg text-black" href="{{route('home')}}}">Finder</a>
            <div class="d-flex flex-row  align-items-center ">
                <button class="navbar-toggler" type="button " data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- customer login -->
                <div class=" d-flex mx-2 d-md-none ">
                    <a href='./login.html' class="login_checked btn btn-primary ">
                        <!-- <i class="bi bi-coin"></i> -->
                        Sign in
                    </a>
                    <a href='./profile.html'><i class="profile bi bi-person-fill pointer  text-black"
                            style="font-size: 2rem;  "></i></a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end  " id="navbarNavAltMarkup">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="navbar-nav align-items-center">
                        <a class="nav-link text-black active" aria-current="page" href="{{route('home')}}">Home</a>
                        <a class="nav-link text-black" href="{{route('jobs')}}">Jobs</a>
                        <a class="nav-link text-black" href="{{route('compenies')}}">Companies</a>
                        <a class="nav-link text-black" href="{{route('connectus')}}" tabindex="-1">Contact Us</a>

                    </div>
                </div>
                <div class=" d-none d-md-flex">
                    <a href='./login.html' class="login_checked btn btn-primary mx-3 d-none d-md-flex ">
                        login
                    </a>
                    <a href='./profile.html'><i class="profile bi bi-person-fill pointer text-black "
                            style="font-size: 2rem;  "></i></a>
                </div>
            </div>
        </div>
    </nav>
    <main class="my-6">
        <div class="container my-5">
            <h1>Out Services</h1>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-map" style="font-size:2rem ; color:cornflowerblue"></i>
                            <h3 class="mt-2 text-truncate">Guaranteed Conversion</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-danger btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-book" style="font-size:2rem ; color:crimson"></i>
                            <h3 class="mt-3 text-truncate">Start-up Dedicated</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-primary btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-laptop" style="font-size:2rem ; color:rgb(220, 20, 153)"></i>
                            <h3 class="mt-3 text-truncate">Visibility Increase</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-secondary btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-bag" style="font-size:2rem ; color:rgb(20, 157, 220)"></i>
                            <h3 class="mt-3 text-truncate">Thorough Analyzes</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-success btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-phone" style="font-size:2rem ; color:crimson"></i>
                            <h3 class="mt-3 text-truncate">Positive Feedback</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-warning btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-pen" style="font-size:2rem ; color:rgb(20, 220, 97)"></i>
                            <h3 class="mt-3 text-truncate">Outstanding Popularity</h3> <span
                                class="text justify-content mt-3">They arrived in fifty mother ships,<br>offering their
                                friendship and advanced<br>technology to Earth</span>
                            <div class="d-block mt-3"> <button class=" btn btn-danger btn-sm btn-block">See
                                    More</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <section class="">
            <!-- Footer -->
            <footer class="bg-purple-primary text-white">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h4 class="text-uppercase">Finder</h4>

                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                                aliquam voluptatem veniam, est atque cumque eum delectus sint!
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">About us</h5>

                            <ul class="list-unstyled mb-0">
                                <li class="mt-3">
                                    <a href="./aboutus.html" class="text-white">About us</a>
                                </li>
                                <li>
                                    <a href="./ourservices.html" class="text-white">Our service</a>
                                </li>
                                <li>
                                    <a href="./contactus.html" class="text-white">Contect us</a>
                                </li>
                                <li class="d-flex flex-row my-2">
                                    <a href="#!" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
                                    <a href="#!" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
                                    <a href="#!" class="text-white mx-2"><i class="bi bi-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase mb-0">Importents Pages</h5>

                            <ul class="list-unstyled">
                                <li class="mt-3">
                                    <a href="./jobs.html" class="text-white">Jobs</a>
                                </li>
                                <li>
                                    <a href="./compenies.html" class="text-white">Compenies</a>
                                </li>
                                <li class="login_checked d-flex">
                                    <a href="./login.html" class=" btn btn-bordre mt-2">Login</a>
                                    <div class=" btn btn-bordre mt-2 mx-2">العربية|</div>
                                </li>
                              

                            </ul>
                        </div>
                        <!--Grid column-->
                        <div>
                            <div class="d-flex justify-content-center h-100 mt-4  col-12 col-lg-6">
                                <div class="search shadow-sm border-gray w-100 row">
                                    <input type="text" class="search-input  " placeholder="Get in tuch..." name="">
                                    <a href="./jobs.html" class="search-icon "> <i class="bi bi-blus"></i> Go </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3 bg-white color-gray">
                    © 2022 Copyright:
                    <a class="text-black" href="https://mdbootstrap.com/">@FatimaAlmashhor</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script  src="./utils/bootstramp/bootstrap.min.js"></script> -->
    <script type='module' src="./js/main.js"></script>
</body>

</html>