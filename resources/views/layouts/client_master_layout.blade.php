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
    .form {
      position: relative
    }

    .form .fa-search {
      position: absolute;
      top: 20px;
      left: 20px;
      color: #9ca3af
    }

    .form span {
      position: absolute;
      right: 17px;
      top: 13px;
      padding: 2px;
      border-left: 1px solid #d1d5db
    }

    .left-pan {
      padding-left: 7px
    }

    .left-pan i {
      padding-left: 10px
    }

    .form-input {
      height: 55px;
      text-indent: 33px;
      border-radius: 10px
    }

    .form-input:focus {
      box-shadow: none;
      border: none;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    }

    .save-icon:hover {
      color: rgb(202, 199, 13);
      transition: 200ms;
      cursor: pointer;
    }

    .circle-btns {
      position: relative;
      min-height: 50px;
      min-width: 40%;
      /* overflow-y: auto; */
    }

    .filter_body {
      position: absolute;
      left: 130px;
      width: 70%;
      height: inherit;
      transition: 0.3s;
    }

    .filter_title {
      position: absolute;
      left: 0px;
      top: 0px;
      width: 120px;
    }

    .w-0 {
      position: absolute;
      width: 0%;
      overflow-x: hidden;
    }

    .dropdown-menu {
      z-index: 10000 !important;
    }
    .profile-head {
            transform: translateY(5rem)
        }

        .dashboard-side {
            background: rgba(var(--bs-light-rgb), var(--bs-bg-opacity));
        }

        .dashboard-side:hover {
            background: rgb(236, 236, 236);
        }

        .dashboard-side.active {
            background: rgb(255, 255, 255);
            /* border: 1px solid rgb(206, 190, 190); */
            color: black;
            transition: 0.3s;
        }

        .slid_bar {
            min-height: 60vh;
        }

        .slid_bar_section {
            position: relative;
            top: 60px;
        }

        .profile_page {
            display: none;
        }

        .profile_page.show {
            display: block;
        }

        .avatar {
            position: relative;
        }

        .avatar_icon {
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            bottom: 35px;
            right: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(173, 173, 173);
            cursor: pointer;
        }

        .avatar_icon:hover {
            background-color: rgb(218, 218, 218);
        }

        .avatar_icon img {
            font-size: 1.2rem;
        }
  </style>
</head>

<body>
  <!-- nav bar -->

  <nav class="navbar navbar-expand-md border-bottom bg-white  text-black navbar-light  d-flex flex-row ">
    <div class="container-fluid  container-lgs">
      <a class="navbar-brand font-lg text-black" href="{{route('home')}}">Finder</a>
      <div class="d-flex flex-row  align-items-center ">
        <button class="navbar-toggler" type="button " data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link text-black active" aria-current="page" href="{{route('home')}}">Home</a>
            <a class="nav-link text-black" href="{{route('jobs')}}">Jobs</a>
            <a class="nav-link text-black" href="{{route('compenies')}}">Companies</a>
            <a class="nav-link text-black" href="{{route('connectus')}}" tabindex="-1">Contact Us</a>

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

  @yield('content');
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
                                <a href="{{route('aboutus')}}" class="text-white">About us</a>
                            </li>
                            <li>
                                <a  href="{{route('ourservices')}}" class="text-white">Our service</a>
                            </li>
                            <li>
                                <a  href="{{route('connectus')}}" class="text-white">Contect us</a>
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
                                <a href="{{route('jobs')}}" class="text-white">Jobs</a>
                            </li>
                            <li>
                                <a href="{{route('compenies')}}" class="text-white">Compenies</a>
                            </li>
                            <li class="login_checked d-flex">
                                <a href="{{route('login')}}" class=" btn btn-bordre mt-2">Login</a>
                                <div class=" btn btn-bordre mt-2 mx-2">العربية|</div>
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
  <script type='module' src="./utils/jquery-3.6.0.min.js"></script>

</body>

</html>