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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/main.css">
    <title>Finder jobs</title>
    <style>
        .profile-head {
            transform: translateY(5rem)
        }

        .circle-icon {
            color: gray;
        }

        .icon-hover {
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
            border-radius: 50%;
            width: 33px;
            height: 33px;
            transition: all 0.6s;
        }

        .icon-hover:hover {
            background: rgb(235, 235, 235);
        }

        .profile-card {
            position: relative;
            background: rgb(247, 247, 247);

        }

        .profile-card .edit-icon {
            display: none;
            transition: 0.3s;
        }

        .profile-card:hover .edit-icon {
            display: flex;
        }
    </style>
</head>

<body>
    <!-- nav bar -->

    <main>
        
        <div class="">
            <div class=" mx-auto">
                <!-- Profile widget -->

                <div class="bg-white shadow rounded overflow-hidden ">
                    <div class="bg-purple-primary w-100">
                        <div class=" container px-4 pt-0 pb-4 cover">
                            <nav class="navbar navbar-expand-md    navbar-light  d-flex flex-row">
                                <div class="container-fluid ">
                                    <a class="navbar-brand font-lg text-white" href="#">Finder</a>
                                    <div class="d-flex flex-row align-items-center " data-bs-toggle="collapse"
                                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <!-- customer login -->
                                        <div class="bg-purple-primary d-flex mx-2 ">
                                            <a href="./login.html" class="btn btn-primary d-lg-none ">
                                                <!-- <i class="bi bi-coin"></i> -->
                                                Sign in
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                        <div class="navbar-nav  align-items-center ">
                                            <a class="nav-link text-white active" aria-current="page"
                                                href="./index.html">Home</a>
                                            <a class="nav-link text-white" href="./jobs.html">Jobs</a>
                                            <a class="nav-link text-white" href="./compenies.html">Companies</a>
                                            <a class="nav-link text-white " href="./contactus.html"
                                                tabindex="-1">Contact
                                                Us</a>
                                            <a href='./login.html' class="btn btn-primary mx-3 d-sm-none d-md-flex ">
                                                login
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <div class="media d-flex flex-row align-items-end profile-head">
                                <div class="profile mr-3 d-flex flex-column"><img
                                        src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"><div id='download_cv'
                                         class="btn btn-outline-dark btn-sm btn-block">Download CV
                                </div></div>

                                <div class="media-body mb-5 text-white mx-2">
                                    <h4 class="mt-0 mb-0">Mark Williams</h4>
                                    <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="list-inline my-3">

                        </ul>
                    </div>

                    <!-- the information -->
                    <div class="col-md-6 card shadow-sm row mx-auto my-3">
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">About</h5>
                                <!-- <a href='./editprofile.html' class="pointer icon-hover"><i class="bi bi-plus"
                                        style="font-size: 2rem; color:gray"></i> </a> -->
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <p class="font-italic mb-0"><i class="bi bi-person"></i>Web Developer</p>
                                    <p class="font-italic mb-0"><i class="bi bi-geo-alt"> </i>Lives in New York</p>
                                    <p class="font-italic mb-0"><i class="bi bi-briefcase"> </i>Photographer</p>
                                </div>
                                <!-- <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <div class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></div>
                                </div> -->
                            </div>
                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Experince</h5>
                                <!-- <a href='./editprofile.html' class="pointer icon-hover"><i class="bi bi-plus"
                                        style="font-size: 2rem; color:gray"></i> </a> -->
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <div class="row g-2 border-bottom py-3">
                                        <div
                                            class="col-1 bg-primary text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                            2019
                                        </div>
                                        <div class="col-11">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus
                                            veritatis velit maiores voluptatibus voluptatem illo ullam deserunt
                                            praesentium
                                            nemo?
                                        </div>
                                    </div>
                                    <div class="row g-2 my-2 border-bottom py-3">
                                        <div
                                            class="col-1 bg-primary text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                            2020
                                        </div>
                                        <div class="col-11">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus
                                            veritatis velit maiores voluptatibus voluptatem illo ullam deserunt
                                            praesentium
                                            nemo?
                                        </div>
                                    </div>
                                    <div class="row g-2 my-2 border-bottom py-3">
                                        <div
                                            class="col-1 bg-primary text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                            2021
                                        </div>
                                        <div class="col-11">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus
                                            veritatis velit maiores voluptatibus voluptatem illo ullam deserunt
                                            praesentium
                                            nemo?
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <div class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></div>
                                </div> -->
                            </div>

                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Skills</h5>
                                <!-- <a href='./editprofile.html' class="pointer icon-hover"><i class="bi bi-plus"
                                        style="font-size: 2rem; color:gray"></i> </a> -->
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <p class="font-italic border-bottom py-2 mb-0">Web Developer</p>
                                    <p class="font-italic border-bottom py-2 mb-0">javascript</p>
                                    <p class="font-italic border-bottom py-2 mb-0">ReactJs</p>
                                </div>
                                <!-- <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <div class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></div>
                                </div> -->
                            </div>

                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Certifications</h5>
                                <!-- <a href='./editprofile.html' class="pointer icon-hover"><i class="bi bi-plus"
                                        style="font-size: 2rem; color:gray"></i> </a> -->
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                </div>
                                <!-- <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <div class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></div>
                                </div> -->
                            </div>

                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Education</h5>
                                <!-- <a href='./editprofile.html' class="pointer icon-hover"><i class="bi bi-plus"
                                        style="font-size: 2rem; color:gray"></i> </a> -->
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p class="color-gray">UX 6 course in 2020</p>
                                    </div>
                                </div>
                                <!-- <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <div class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></div>
                                </div> -->
                            </div>

                        </div>
                        <div class="py-4 px-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show
                                    all</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-2 pr-lg-1"><img
                                        src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="" class="img-fluid rounded shadow-sm"></div>
                                <div class="col-lg-6 mb-2 pl-lg-1"><img
                                        src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="" class="img-fluid rounded shadow-sm"></div>
                                <div class="col-lg-6 pr-lg-1 mb-2"><img
                                        src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                                        alt="" class="img-fluid rounded shadow-sm"></div>
                                <div class="col-lg-6 pl-lg-1"><img
                                        src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="" class="img-fluid rounded shadow-sm"></div>
                            </div>
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
                                <li>
                                    <a href="./login.html" class=" btn bg-white text-black mt-2">Login</a>
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
                    ?? 2022 Copyright:
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