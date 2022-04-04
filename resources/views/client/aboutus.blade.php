@extends('layouts.client_master_layout');
@section('content')
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
@endsection