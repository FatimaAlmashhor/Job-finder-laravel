@extends('layouts.client_master_layout');
@section('content')

    <style>
        body {
            margin-top: 20px;
            background: #f6f9fc;
        }

        .account-block {
            padding: 0;
            /* background-image: url(https://bootdey.com/img/Content/bg1.jpg); */
            /* background-repeat: no-repeat; */
            /* background-size: cover; */
            height: 100%;
            position: relative;
        }

        .account-block .overlay {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .account-block .account-testimonial {
            text-align: center;
            color: #fff;
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0;
        }

        .text-theme {
            color: #5369f8 !important;
        }

        .btn-theme {
            background-color: #5369f8;
            border-color: #5369f8;
            color: #fff;
        }

        textarea {
            resize: none;
        }

        .bg-animation {
            /* width: 100%; */
            /* height: 100vh; */
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            background-size: 300% 300%;
            background-image: linear-gradient(45deg,
            rgb(70, 181, 233) 0%,
                    rgb(70, 181, 233) 10%,
                    rgb(69, 92, 207) 45%,
                    rgb(47, 66, 161) 71%,
                    rgb(59, 5, 25) 100%);
            animation: AnimateBG 10s ease infinite;
        }

        @keyframes AnimateBG {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }
    </style>



    <main class=" my-6">
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Sign In</h3>
                                        </div>

                                        <h6 class="h5 mb-0">Welcome !</h6>
                                        <p class="text-muted mt-2 mb-5">Nice to have you here.</p>

                                        <form>
                                            <div class="form-group my-2">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group  my-2">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type='password' class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group mb-5 my-2">
                                                <label for="exampleInputPassword1">Confirm your Password</label>
                                                <input type='password' class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <p>You have account ? <span><a href="{{route('login')}}">Login</a></span></p>
                                            <a href='{{route('profile')}}' type="submit" class="btn btn-theme">Register</a>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block bg-animation rounded-right">
                                        <div class="overlay rounded-right"></div>
                                        <div class="area">
                                            <ul class="circles">
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
                                        <div class="account-testimonial">
                                            <h1 class="mb-5">Finder</h1>
                                            <!-- <h4 class="text-white mb-4">Welcom !</h4> -->
                                            <p class="lead text-white">"Best investment i made for a long time. Can only
                                                recommend it for other users."</p>
                                            <p>- Admin User</p>
                                            <div class="col-6 mx-auto my-3">
                                                <div class="row mx-auto d-flex flex-wrap ">
                                                    <div
                                                        class="col-4 d-flex flex-row justify-content-around align pointer">
                                                        <i class="bi bi-twitter"></i> </div>
                                                    <div
                                                        class="col-4 d-flex flex-row justify-content-around align pointer">
                                                        <i class="bi bi-facebook"></i> </div>
                                                    <div
                                                        class="col-4 d-flex flex-row justify-content-around align pointer">
                                                        <i class="bi bi-google"></i> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->


                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>
    </main>
    @endsection