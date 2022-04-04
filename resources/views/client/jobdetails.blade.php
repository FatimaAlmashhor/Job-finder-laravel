@extends('layouts.client_master_layout');
@section('content')
    <main class="container mx-auto my-6 d-flex justify-content-center">
        <div class=" col-12 col-lg-7 mb-2  position-sticky">
            <div class="card w-100 h-100">
                <div class="w-100 bg-white-gray p-4 shadow  rounded-top ">

                    <!-- top job detila  -->
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="heading">Software Architect</h3>
                            <p class="m-0 p-1 text-black">Riddle </p>
                            <!-- location and remote  -->
                            <div class="d-flex flex-row align-items-center">
                                <p class=" p-1 color-gray">US - lose anglous</p>
                                <p class="p-1 mx-2">Remote</p>
                            </div>
                            <!-- div the price and work -->
                            <div class="d-flex flex-row">
                                <div
                                    class='badge  bg-white-gray border-gray d-flex flex-row justify-content-center align-items-center'>
                                    <p class="m-0 p-1 color-gray">$2000 - $3000</p>
                                </div>
                                <div
                                    class='badge mx-3 bg-white-gray border-gray text-black d-flex flex-row justify-content-center align-items-center'>
                                    <p class="m-0 p-1 color-gray">Full time</p>
                                </div>
                            </div>

                            <!-- button for apply -->
                            <button class="btn bg-primary mt-3 px-4 py-1">
                                <p class="p-0 m-0 p-1 color-white">Apply now</p>
                            </button>
                        </div>
                        <div class="badge text-black"> <i class="bi bi-bookmark  save-icon"
                                style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="section border-bottom">
                        <h4>Job Detils</h4>
                        <div class="my-3">
                            <h6>Salary : </h6>
                            <p class="color-gray font-sm"> $2000 - $3000</p>
                        </div>
                        <div class="my-3">
                            <h6>Job type : </h6>
                            <p class="color-gray font-sm"> Full time</p>
                        </div>
                        <div class="my-3">
                            <h6>Number of hires for this role: </h6>
                            <p class="color-gray font-sm"> 1</p>
                        </div>
                    </div>
                    
                    <div class="section border-bottom my-3">
                        <h4>Qualifications</h4>
                        <div class="my-3">
                            <ul class="mx-3 dot">
                                <li><i class="bi bi-dot "></i>Day Shift (Required)</li>
                                <li><i class="bi bi-dot "></i>Day Shift (Required)</li>
                                <li><i class="bi bi-dot "></i>Day Shift (Required)</li>
                            </ul>
                        </div>
                    </div>


                    <div class="section border-bottom my-3">
                        <h4>Benefits</h4>
                        <small>Pulled from the full job description</small>
                    </div>


                    <div class="section border-bottom my-3 py-3">
                        <h4>Full Job Description</h4>
                        <small>We are a modern, high quality specialty dental practice seeking a true team player to join our fun and professional family. Our office is an extremely safe environment with infection control protocols that go far beyond current standards.</small>
                        <br/>
                        <br/>
                        <small>
                            If you are a nice, honest, and reliable team player, we will train you on the rest. Our biggest requirement: you have to enjoy your work and be a people person - after all, we spend a lot of time together.
                        </small>
                    </div>


                    <div class="section border-bottom my-3 py-3">
                        <h4>Location
                           </h4>
                        <small> Stonestown Endodontics in San Francisco, CA 94132</small>
                        <br/>
                        <br/>
                        
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection