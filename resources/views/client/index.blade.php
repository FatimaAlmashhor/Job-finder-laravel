<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Finder</title>
    <style>
    .parners {
        position: relative;
        bottom: -100px;
    }

    .campany_image {
        width: 150px;
        height: auto;
        /* border:1px solid rgb(192, 192, 192) ; */
        border-radius: 20px;
    }

    .campany_image img {
        border-radius: inherit;
    }
    </style>

</head>

<body>
    <!-- nav bar -->

    <header class="bg-animation  header" style="position: relative;">
        <nav class="navbar navbar-expand-md text-white w-100   d-flex flex-row ">
            <div class="container-fluid  container-lg ">
                <a class="navbar-brand font-lg text-white" href="./index.html">Finder</a>
                <div class="d-flex flex-row  align-items-center ">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list text-white"></i>
                    </button>
                    <!-- customer login -->
                    <div class=" d-flex mx-2 d-md-none ">
                        <a href="{{route('login')}}" class="login_checked btn btn-bordre text-light  mx-2 border-left  hover">
                            <!-- <i class="bi bi-coin"></i> -->
                            login
                        </a>
                        <!-- <a href='./profile.html'><i class="profile bi bi-person-fill pointer  "
                                style="font-size: 2rem; color:white "></i></a> -->
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-between  " id="navbarNavAltMarkup">
                    <div class="d-flex flex-row justify-content-center ">
                        <div class="navbar-nav align-items-center">
                            <a class="nav-link text-white active" aria-current="page" href="{{route('home')}}">Home</a>
                            <a class="nav-link text-white" href="{{route('jobs')}}">Jobs</a>
                            <a class="nav-link text-white" href="{{route('compenies')}}">Companies</a>
                            <a class="nav-link text-white" href="{{route('connectus')}}" tabindex="-1">Contact Us</a>

                        </div>
                    </div>
                    <div class=" d-none d-md-flex">
                        <a href="{{route('login')}}" class="login_checked btn  text-light  mx-2 border-left  hover">
                            <!-- <i class="bi bi-coin"></i> -->
                            login
                        </a>
                        <!-- <a href='./profile.html'><i class="profile bi bi-person-fill pointer  "
                                style="font-size: 2rem; color:white "></i></a> -->
                    </div>
                </div>
            </div>
        </nav>
        <div class="header_container container mh-100 ">
            <div class="row h-100 " style="margin-top: 8rem;">
                <div
                    class="col-lg-6 col-12 d-flex flex-column  justify-content-center align-items-start mt-5  align-self-center  h-100">
                    <h1 class="color-white Light font-xxxl">Finder</h1>
                    <p class="color-white">One place to find your dream Your can explor the world in simple steps </p>
                    <small class="text-light mt-0 py-0 mb-4 ">Take look start by clicking on the Start button</small>
                    <button class="btn btn-bordre bg-purple-secondary  py-2 px-4" style="width: fit-content;">Get
                        Started</button>
                </div>
                <div class="col-6 d-none d-lg-flex">
                    <div class="infint_slider__vertical d-flex flex-row ">
                        <div class="infint_slider_col  " data-left='200'>

                            <ul class="verical_slider_warrper slide_down row d-flex flex-column gy-2  ">
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-arrow-up-left-circle"
                                                style="font-size: 2rem; color:cadetblue"></i>
                                            <span class="card-text text-center color-gray">Skills up.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-bookmark-check"
                                                style="font-size: 2rem; color:cornflowerblue"></i>
                                            <span class="card-text text-center color-gray">Tack your compeny.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                        <div class="infint_slider_col " style="left: 180px;">

                            <ul class="verical_slider_warrper slide_up row d-flex flex-column gy-2  ">
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-arrow-up-left-circle"
                                                style="font-size: 2rem; color:cadetblue"></i>
                                            <span class="card-text text-center color-gray">Skills up.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-bookmark-check"
                                                style="font-size: 2rem; color:cornflowerblue"></i>
                                            <span class="card-text text-center color-gray">Tack your compeny.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                        <!-- <div class="infint_slider_col " style="left: 180px;">

                            <ul class="verical_slider_warrper row d-flex flex-column gy-2  ">
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-arrow-up-left-circle"
                                                style="font-size: 2rem; color:cadetblue"></i>
                                            <span class="card-text text-center color-gray">Skills up.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-bookmark-check"
                                                style="font-size: 2rem; color:cornflowerblue"></i>
                                            <span class="card-text text-center color-gray">Tack your compeny.</span>
                                        </div>
                                    </div>
                                </li>
                                <li style="width: 200px;
                                height: 160px;">
                                    <div class="card" style="width: inherit; height: inherit;">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                            <i class="bi bi-alarm" style="font-size: 2rem; color:brown"></i>
                                            <span class="card-text text-center color-gray">Save your time.</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="position-relative overflow-hidden">
        <!-- search -->
        <section
            class="home-search position-relative w-100 d-flex flex-column justify-content-center align-items-center my-6  col-12 col-lg-6">
            <div class="buble bg-purple-secondary position-absolute "></div>
            <h1 class="text-black">Start looking for your job.</h1>
            <div class="d-flex justify-content-center h-100 mt-4  col-12 col-lg-6">
                <div class="search shadow-sm border-gray w-100 row">
                    <input type="text" class="search-input  " placeholder="search..." name="">
                    <a href="./jobs.html" class="search-icon "> <i class="bi bi-search"></i> </a>
                </div>
            </div>
            <div class="mt-3 mx-1">
                <div class="d-flex flex-row gx-2 gy-1 flex-wrap">
                    <div class="bg-white-gray p-2 me-1 mb-1  color-gray border-gray pointer">
                        <i class="bi bi-plus"></i> <span>Frontent Developer</span>
                    </div>
                    <div class="bg-white-gray p-2 me-1 rounded-1 mb-1 pointer color-gray border-gray">
                        <i class="bi bi-plus"></i> <span>Programmer</span>
                    </div>
                    <div class="bg-white-gray p-2 me-1 mb-1 rounded-1 color-gray pointer border-gray">
                        <i class="bi bi-plus"></i> <span>Data analsis</span>
                    </div>
                    <div class="bg-white-gray p-2 me-1  mb-1 rounded-1 color-gray pointer border-gray">
                        <i class="bi bi-plus"></i> <span>Doctor</span>
                    </div>
                    <div class="bg-white-gray p-2 me-1 mb-1 rounded-1 color-gray pointer border-gray">
                        <i class="bi bi-plus"></i> <span>Manger</span>
                    </div>
                    <div class="bg-white-gray p-2 me-1 mb-1 rounded-1 color-gray pointer border-gray">
                        <i class="bi bi-plus"></i> <span>Engneer</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- slider -->
        <div id="myCarousel" class="carousel slide bg-purple-secondary my-6" data-bs-ride="carousel">
            <div class="area">
                <ul class="circles circles_dark">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- slider boady -->
            <div class="carousel-inner " style="height: 45vh;">
                <div class="carousel-item active h-100 ">
                    <!-- <svg class="bd-placeholder-img" fill='red' width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="row">
                        <div class="col-6">
                            <div class="container">
                                <div class="carousel-caption text-start ">
                                    <h1 class="text-black">Looking For jobs.</h1>
                                    <p class="color-gray">your can search and and filter your match job.</p>
                                    <p><a class="btn btn-bordre text-black " href="./jobs.html">GO SEE JOBJs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 h-100 container d-flex justify-content-center align-items-center">
                            <!-- <div class="card ">
                                hi
                            </div> -->
                        </div>
                    </div>

                </div>
                <div class="carousel-item h-100">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="text-black">You looking for your dearm job?</h1>
                            <p class="color-gray">Just register now and start your journey
                                .</p>
                            <p><a class="btn btn-bordre text-black" href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 text-black">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="text-black">Be part of our team.</h1>
                            <p class="color-gray">Join our commuilty and find talented peoples .</p>
                            <p><a class="btn  btn-bordre text-black" href="./compenies.html">Join us</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- the common postes -->
        <section class="w-100 container-lg my-5">
            <div class="d-flex flex-column align-items-center">
                <h1 class=" py-2 text-center">Big Company Hiring Now </h1>
                <p class="color-gray">Your dearm start from here</p>
            </div>
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <a href='./compenies.html' class="card text-black card-hover pointer p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="campany_image">
                                        <img class='w-100' src="./assets/images/c1929d3492c2f64ab65b43808c072043.jpg" />
                                    </div>
                                </div>
                                <div class="badge mt-4"> <span>Tech</span> </div>
                            </div>
                            <div class="mt-3 px-4">
                                <h3 class="heading">Online Shope</h3>
                                <p class="color-gray">Tech campeny for shopping online</p>
                                <div class="mt-1">
                                    <div>
                                        <ul class="d-flex">
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-light"></i></li>
                                            <li><small class="color-gray">+300 follows</small></li>

                                        </ul>
                                    </div>
                                    <div class="mt-3"> <span class="text1">+ 20 Year <br />
                                            <span class="text2">+ 30,000 employee</span></span> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href='./compenies.html' class="card text-black card-hover pointer p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="campany_image">
                                        <img class='w-100' src="./assets/images/c1929d3492c2f64ab65b43808c072043.jpg" />
                                    </div>
                                </div>
                                <div class="badge mt-4"> <span>Tech</span> </div>
                            </div>
                            <div class="mt-3 px-4">
                                <h3 class="heading">Online Shope</h3>
                                <p class="color-gray">Tech campeny for shopping online</p>
                                <div class="mt-1">
                                    <div>
                                        <ul class="d-flex">
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-light"></i></li>
                                            <li><small class="color-gray">+300 follows</small></li>

                                        </ul>
                                    </div>
                                    <div class="mt-3"> <span class="text1">+ 20 Year <br />
                                            <span class="text2">+ 30,000 employee</span></span> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href='./compenies.html' class="card text-black card-hover pointer p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="campany_image">
                                        <img class='w-100' src="./assets/images/c1929d3492c2f64ab65b43808c072043.jpg" />
                                    </div>
                                </div>
                                <div class="badge mt-4"> <span>Tech</span> </div>
                            </div>
                            <div class="mt-3 px-4">
                                <h3 class="heading">Online Shope</h3>
                                <p class="color-gray">Tech campeny for shopping online</p>
                                <div class="mt-1">
                                    <div>
                                        <ul class="d-flex">
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-warning"></i></li>
                                            <li><i class="bi bi-star-fill text-light"></i></li>
                                            <li><small class="color-gray">+300 follows</small></li>

                                        </ul>
                                    </div>
                                    <div class="mt-3"> <span class="text1">+ 20 Year <br />
                                            <span class="text2">+ 30,000 employee</span></span> </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- our companies -->
        <section class=" w-100 my-5 d-flex flex-column justify-content-center align-items-center ">
            <div class="parners d-flex flex-column align-items-center ">
                <h1 class="mt-5 ">Our partners</h1>
                <p class="color-gray">Trust and fath of us is what make this happen</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#302866" fill-opacity="1"
                    d="M0,288L80,288C160,288,320,288,480,277.3C640,267,800,245,960,234.7C1120,224,1280,224,1360,224L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
            <div
                class="w-100 bg-dark-blue py-5 d-flex flex-wrap flex-row justify-content-around align-items-center p-3">
                <div class="text-white mx-2">
                    <div style="width: 100px;
                    height: 100px;">
                        <div class="card" style="width: inherit; height: inherit;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                <img class='w-100'
                                    src='./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg' />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-white mx-2">
                    <div style="width: 100px;
                    height: 100px;">
                        <div class="card" style="width: inherit; height: inherit;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                <img class='w-100'
                                    src='./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg' />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-white mx-2">
                    <div style="width: 100px;
                    height: 100px;">
                        <div class="card" style="width: inherit; height: inherit;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                <img class='w-100' src='./assets/images/imagess.png' />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-white mx-2">
                    <div style="width: 100px;
                    height: 100px;">
                        <div class="card" style="width: inherit; height: inherit;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                <img class='w-100' src='./assets/images/images.png' />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-white mx-2">
                    <div style="width: 100px;
                    height: 100px;">
                        <div class="card" style="width: inherit; height: inherit;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center mx-auto">
                                <img class='w-100' src='./assets/images/c1929d3492c2f64ab65b43808c072043.jpg' />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#302866" fill-opacity="1"
                    d="M0,0L80,48C160,96,320,192,480,202.7C640,213,800,139,960,122.7C1120,107,1280,149,1360,170.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </section>

        <!-- employee section -->
        <section class="my-5 ">
            <!-- For demo purpose -->

            <div class="container py-5 position-relative">
                <div class="buble bg-purple-secondary position-absolute "
                    style="left: 50px; width: 500px; height: 500px; top:-300px"></div>
                <div class="row text-center text-black">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="">Team Page</h1>
                        <p class="lead mb-0">Using Bootstrap 4 grid and utilities, create a nice team page.</p>

                    </div>
                </div>
            </div><!-- End -->
            <div class="container">
                <div class="row text-center gx-5">

                    <!-- Team item -->
                    <div class=" col-xl-3 col-sm-6 mb-5  ">
                        <div class=" py-3 "><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt=""
                                width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0"><a class="text-black" href='./useprofile.html'> Manuella Nevoresky </a>
                            </h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End -->



                    <!-- Team item -->
                    <div class=" col-xl-3 col-sm-6 mb-5  ">
                        <div class=" py-3 "><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt=""
                                width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0"><a class="text-black" href='./useprofile.html'> Manuella Nevoresky </a>
                            </h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End -->



                    <!-- Team item -->
                    <div class=" col-xl-3 col-sm-6 mb-5  ">
                        <div class=" py-3 "><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt=""
                                width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0"><a class="text-black" href='./useprofile.html'> Manuella Nevoresky </a>
                            </h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End -->



                    <!-- Team item -->
                    <div class=" col-xl-3 col-sm-6 mb-5  ">
                        <div class=" py-3 "><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt=""
                                width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0"><a class="text-black" href='./useprofile.html'> Manuella Nevoresky </a>
                            </h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                            class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End -->




                </div>
            </div>
        </section>
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
                                    <a href="{{route('login')}}" class=" btn btn-bordre mt-2">Login</a>
                                    <div class=" btn btn-bordre mt-2 mx-2">??????????????|</div>
                                </li>


                            </ul>
                        </div>
                        <!--Grid column-->
                        <div>
                            <div class="d-flex justify-content-center h-100 mt-4  col-12 col-lg-6">
                                <div class="search shadow-sm border-gray w-100 row">
                                    <input type="text" class="search-input  " placeholder="Get in tuch..." name="">
                                    <a href="{{route('jobs')}}" class="search-icon "> <i class="bi bi-blus"></i> Go </a>
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
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!-- <script  src="./utils/bootstramp/bootstrap.min.js"></script> -->
    <script type='module' src="./js/main.js"></script>
</body>

</html>