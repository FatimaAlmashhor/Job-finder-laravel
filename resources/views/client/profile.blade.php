
@extends('layouts.client_master_layout');
@section('content')
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
                                            <a class="nav-link text-white active" aria-current="page" href="{{route('home')}}">Home</a>
                                             <a class="nav-link text-white" href="{{route('jobs')}}">Jobs</a>
                                             <a class="nav-link text-white" href="{{route('compenies')}}">Companies</a>
                                             <a class="nav-link text-white" href="{{route('connectus')}}" tabindex="-1">Contact Us</a>
                                            <a href="{{route('login')}}" class="btn btn-primary mx-3 d-sm-none d-md-flex ">
                                                login
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <div class="media d-flex flex-row align-items-end profile-head">
                                <div class="profile mr-3 d-flex flex-column"><img
                                        src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"><a
                                        href="{{route('editprofile')}}" class="btn btn-outline-dark btn-sm btn-block">Edit
                                        profile</a></div>

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
                                <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_about_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <p class="font-italic mb-0"><i class="bi bi-person"></i>Web Developer</p>
                                    <p class="font-italic mb-0"><i class="bi bi-geo-alt"> </i>Lives in New York</p>
                                    <p class="font-italic mb-0"><i class="bi bi-briefcase"> </i>Photographer</p>
                                </div>
                                <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <a href='./editprofile.html' class="icon-hover "><i class="bi bi-pencil circle-icon"
                                            style="font-size: 1.2rem;"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Experince</h5>
                                <div class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_expie_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <div class="row g-2 border-bottom py-3">
                                        <div
                                            class="col-2   text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                            <div class="icon"> <i class="bi bi-reddit text-black"></i> </div>
                                        </div>
                                        <div class="col-10 px-3" >
                                            <h5>Software Developer</h5>
                                            <p>Work in : Payoo</p>
                                            <small>Here I worked as designer</small>
                                        </div>
                                    </div>
                                    <div class="row g-2 border-bottom py-3">
                                        <div
                                            class="col-2   text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                            <div class="icon"> <i class="bi bi-google text-black"></i> </div>
                                        </div>
                                        <div class="col-10 px-3" >
                                            <h5>Software Developer</h5>
                                            <p>Work in : Payoo</p>
                                            <small>Here I worked as designer</small>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <a href='./editprofile.html' class="icon-hover "><i class="bi bi-pencil circle-icon"
                                        style="font-size: 1.2rem;"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Skills</h5>
                                <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_skills_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <p class="font-italic border-bottom py-2 mb-0">Web Developer</p>
                                    <p class="font-italic border-bottom py-2 mb-0">javascript</p>
                                    <p class="font-italic border-bottom py-2 mb-0">ReactJs</p>
                                </div>
                                <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <a href='./editprofile.html' class="icon-hover "><i class="bi bi-pencil circle-icon"
                                        style="font-size: 1.2rem;"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Cources</h5>
                                <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                data-bs-target="#add_cource_modal"><i class="bi bi-plus"
                                    style="font-size: 2rem; color:gray"></i> </div>
                            </div>
                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p>In 2020 - present</p>
                                        <p class="color-gray">Some description here</p>
                                    </div>
                                    <div class="border-bottom my-2">
                                        <h6>Google UX</h6>
                                        <p>In 2020 - present</p>
                                        <p class="color-gray">Some description here</p>
                                    </div>
                                    
                                </div>
                                <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <a href='./editprofile.html' class="icon-hover "><i class="bi bi-pencil circle-icon"
                                        style="font-size: 1.2rem;"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="mb-0 py-2">Education</h5>
                                <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_educ_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                            </div>

                            <div class="p-4 row rounded shadow-sm  profile-card position-relative d-flex ">
                                <div class="col-12 col-md-11 ">
                                    <!-- here the experice section -->
                                    <div class="border-bottom my-2 pb-3 row">
                                        <div class="col-3">
                                            <div class="p-1 border">
                                                <img class="w-100" src="./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-9 d-flex flex-column justify-content-center">
                                            <h6 class="h5">Taiz unviersity </h6>
                                            <p class="m-0 h6">It engneering</p>
                                            <p class="color-gray pt-1 m-0">from 2017 - 2021</p>
                                            <small class="color-gray">Studey UI/UX - AI - JS</small>
                                        </div>
                                    </div>
                                    <div class="border-bottom my-2 pb-3 row">
                                        <div class="col-3">
                                            <div class="p-1 border">
                                                <img class="w-100" src="./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-9 d-flex flex-column justify-content-center">
                                            <h6 class="h5">Taiz unviersity </h6>
                                            <p class="m-0 h6">It engneering</p>
                                            <p class="color-gray pt-1 m-0">from 2017 - 2021</p>
                                            <small class="color-gray">Studey UI/UX - AI - JS</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- here the edit icon section -->
                                <div class=" edit-icon col-12 col-md-1 pointer flex-row justify-content-end">
                                    <a href='./editprofile.html' class="icon-hover "><i class="bi bi-pencil circle-icon"
                                        style="font-size: 1.2rem;"></i></a>
                                </div>
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
        <!--modals  -->
         <!-- skill modals  -->
    <div class="modal fade" id="add_skills_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adding New Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Add new skill.</p>
                    <form>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">Skill:</label>
                            <input type="text" class="form-control" id="skill-title">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- cource modals -->
    <div class="modal fade" id="add_cource_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cources</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Add new skill.</p>
                    <form>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">Cource Title:</label>
                            <input type="text" class="form-control" id="skill-title">
                        </div>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">Date :</label>
                            <input type="date" class="form-control" id="skill-title">
                        </div>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">More Description :</label>
                            <textarea type="text" class="form-control" id="skill-title"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- expirence modals -->
    <div class="modal fade" id="add_expie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Experince</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Add new skill.</p>
                    <form>
                        <div class="mb-3">
                            <label for="position_title" class="col-form-label">Position Title:</label>
                            <input type="text" class="form-control" id="position_title">
                        </div>
                        <div class="mb-3">
                            <label for="time_hired" class="col-form-label">Time Hired :</label>
                            <input type="date" class="form-control" id="time_hired">
                        </div>
                        <div class="mb-3 form-check-inline">
                            <input type="checkbox" class="" id="precent">
                            <label for="precent" class="">Precent :</label>
                        </div>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">Campany Name :</label>
                            <input type="date" class="form-control" id="skill-title">
                        </div>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">More Description :</label>
                            <textarea type="text" class="form-control" id="skill-title"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- educ modals -->
    <div class="modal fade" id="add_educ_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Add new skill.</p>
                    <form>
                        <div class="mb-3">
                            <label for="position_title" class="col-form-label">Place Name:</label>
                            <input type="text" class="form-control" id="position_title">
                        </div>
                        <div class="mb-3">
                            <label for="time_hired" class="col-form-label">Start Time :</label>
                            <input type="date" class="form-control" id="time_hired">
                        </div>
                        <div class="mb-3">
                            <label for="time_hired" class="col-form-label">Finsh Time :</label>
                            <input type="date" class="form-control" id="time_hired">
                        </div>

                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">Filed title :</label>
                            <input type="date" class="form-control" id="skill-title">
                        </div>
                        <div class="mb-3">
                            <label for="skill-title" class="col-form-label">More Description :</label>
                            <textarea type="text" class="form-control" id="skill-title"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

        <!-- image load modal -->
<div class="modal fade " id="add_image_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="file" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger">Upload</button>
            </div>
        </div>
    </div>
</div>
@endsection