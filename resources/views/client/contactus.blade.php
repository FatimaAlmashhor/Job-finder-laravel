
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
                                            <h3 class="h4 font-weight-bold text-theme">Contact Us</h3>
                                        </div>

                                        <h6 class="h5 mb-0">Welcome!</h6>
                                        <p class="text-muted mt-2 mb-5">We are more than happy to contant with you.</p>

                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="exampleInputPassword1">Massage</label>
                                                <textarea class="form-control" id="exampleInputPassword1"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-theme">Send</button>
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
                                                        <i class="bi bi-twitter"></i>
                                                    </div>
                                                    <div
                                                        class="col-4 d-flex flex-row justify-content-around align pointer">
                                                        <i class="bi bi-facebook"></i>
                                                    </div>
                                                    <div
                                                        class="col-4 d-flex flex-row justify-content-around align pointer">
                                                        <i class="bi bi-google"></i>
                                                    </div>
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