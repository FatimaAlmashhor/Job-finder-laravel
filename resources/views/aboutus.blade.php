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

    <title>Finder About</title>
    <style>


    </style>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-md border-bottom bg-white  text-black navbar-light  d-flex flex-row ">
        <div class="container-fluid  container-lgs">
            <a class="navbar-brand font-lg text-black" href="./index.html">Finder</a>
            <div class="d-flex flex-row  align-items-center ">
                <button class="navbar-toggler" type="button " data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- customer login -->
                <div class=" d-flex mx-2 d-md-none ">
                    <a href='{{route('login')}}' class="login_checked btn btn-primary ">
                        <!-- <i class="bi bi-coin"></i> -->
                        Sign in
                    </a>
                    <!-- <a href='./profile.html'><i class="profile bi bi-person-fill pointer  text-black"
                  style="font-size: 2rem;  "></i></a> -->
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end  " id="navbarNavAltMarkup">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="navbar-nav align-items-center">
                        <a class="nav-link text-white active" aria-current="page" href="{{route('home')}}">Home</a>
                            <a class="nav-link text-white" href="{{route('jobs')}}">Jobs</a>
                            <a class="nav-link text-white" href="{{route('compenies')}}">Companies</a>
                            <a class="nav-link text-white" href="{{route('connectus')}}" tabindex="-1">Contact Us</a>

                    </div>
                </div>
                <div class=" d-none d-md-flex">
                    <a href='{{route('login')}}' class="login_checked btn btn-primary mx-3 d-none d-md-flex ">
                        login
                    </a>
                    <!-- <a href='./profile.html'><i class="profile bi bi-person-fill pointer text-black "
                  style="font-size: 2rem;  "></i></a> -->
                </div>
            </div>
        </div>
    </nav>
    <main class="my-6">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
            integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                    <div class="row gx-4">
                        <div class=" col-12  p-2">
                            <div class="card">
                                <img class='w-100' src="./assets/images/81562-job-hunt-concept.gif" />
                            </div>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                    <div class="section-title ml-lg-5">
                        <h5 class="text-custom font-weight-normal mb-3">About Us</h5>
                        <h4 class="title mb-4">
                            Our mission is to <br />
                            make your life easier.
                        </h4>
                        <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit quod debitis
                            praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>

                        <div class="row">
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="media align-items-center rounded shadow p-3">
                                    <i class="bi bi-person h4 mb-0 text-custom"></i>
                                    <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Support</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="media align-items-center rounded shadow p-3">
                                    <i class="bi bi-image h4 mb-0 text-custom"></i>
                                    <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Development</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row align-items-center flex-row-reverse my-5">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                    <div class="row gx-4">
                        <div class=" col-12  p-2 left_box">
                            <div class="card">
                                <img class='w-100'
                                    src="./assets/images/41391-we-are-hiring-get-ready-to-work-job-recruitment-isometric-hiring-process.gif" />
                            </div>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                    <div class="section-title ml-lg-5">
                        <h5 class="text-custom font-weight-normal mb-3">About Our Time</h5>
                        <h4 class="title mb-4">
                            Full Stack Developer <br />
                            Fatima Amin Almashhor.
                        </h4>
                        <p class="text-muted mb-0">Full stack developer . web desginer</p>

                        <div class="row">
                            <div class="col-lg-4 mt-4 pt-2">
                                <div class="media d-flex align-items-center rounded  p-1">
                                    <i class="bi bi-code h4 mb-0 text-custom"></i>
                                    <h6 class="ml-3 mb-0"><a href="@fatima.almashhor@gmail.com" class="text-dark">Hire
                                            Me</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="media align-items-center rounded ">
                                    <h6 class=" mb-0"><a href="javascript:void(0)" class="text-dark">
                                            <div class="d-flex flex-row my-2 justify-content-start">
                                                <a href="" class="text-black pointer  mx-2 "><i
                                                        class="bi bi-twitter"></i></a>
                                                <a href="#!" class="text-black pointer mx-2"><i
                                                        class="bi bi-facebook"></i></a>
                                                <a href="#!" class="text-black pointer mx-2"><i
                                                        class="bi bi-linkedin"></i></a>
                                            </div>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--enr row-->
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