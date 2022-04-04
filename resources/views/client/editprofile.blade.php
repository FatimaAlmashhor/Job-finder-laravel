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

<body class="">
    <!-- nav bar -->
    <nav class="navbar navbar-expand-md border-bottom bg-white  text-black navbar-light  d-flex flex-row ">
        <div class="container-fluid  container-lgs">
          <a class="navbar-brand font-lg text-black" href="{{route('home')}}">Finder</a>
        </div>
      </nav>
    <main class="my-6 ">
        <div class="">
            <div class=" mx-auto ">
                <!-- Profile widget -->

                <div class="bg-white  rounded overflow-hidden ">

                    <!-- the information -->
                    <div class="container ">
                        <div class=" row mx-auto my-3 gx-5 gy-1">

                            <!-- here the left side -->
                            <div class="col-12 col-lg-4  ">
                                <div>
                                    <div class="bg-purple-primary w-100">
                                        <div class=" container px-4 pt-0 pb-4 cover">
                                            <a href='{{route('home')}}'>
                                                <i class="bi bi-arrow-left-short text-white" style="font-size: 2rem;"></i>
                                            </a>
                                            <div class="media  d-flex flex-row align-items-end profile-head">
                                                <div class="profile  avatar  d-flex flex-column">
                                                    <span data-bs-target="#add_image_modal" data-bs-toggle="modal"
                                                        class="avatar_icon " id="">
                                                        <i class="bi bi-box-arrow-in-down-left"
                                                            style="color : white"></i>
                                                    </span>
                                                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"><a
                                                        href="./profile.html"
                                                        class="btn btn-outline-dark btn-sm btn-block">View your
                                                        profile</a>
                                                </div>

                                                <div class="media-body mb-5 text-white mx-2">
                                                    <h4 class="mt-0 mb-0">Mark Williams</h4>
                                                    <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New
                                                        York</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="  bg-light rounded-top  d-flex justify-content-end text-center">
                                        <ul class="slid_bar list-inline rounded-top mb-0 my-4 w-100 ">
                                            <div class="w-100  slid_bar_section">
                                                <div class='text-black  bg-secondary '>

                                                    <ul class="side_bar_list  mb-3 ">
                                                        <li data-btn-id='0'
                                                            class="dashboard-side active list-group-item d-flex justify-content-between lh-condensed pointer">
                                                            <div class="d-flex">
                                                                <!-- <i class="bi bi-person icon"></i> -->
                                                                <div class="mx-2">
                                                                    <h6 class="my-0 ">
                                                                        <span> Inforamtion </span>
                                                                    </h6>
                                                                    <small class="text-muted">Name , email ...</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li data-btn-id='1'
                                                            class=" dashboard-side list-group-item d-flex justify-content-start lh-condensed pointer">
                                                            <div class="d-flex">
                                                                <!-- <i class="bi bi-star "></i> -->
                                                                <div class="">
                                                                    <h6 class="my-0 ">
                                                                        <span> Skills </span>
                                                                    </h6>
                                                                    <small class="text-muted">Name , email ...</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li data-btn-id='2'
                                                            class=" dashboard-side list-group-item d-flex justify-content-between lh-condensed pointer">
                                                            <div>
                                                                <h6 class="my-0">Edit Your Education</h6>
                                                                <small class="text-muted">High School....</small>
                                                            </div>
                                                        </li>
                                                        <li data-btn-id='3'
                                                            class=" dashboard-side list-group-item  d-flex justify-content-between  pointer">
                                                            <div class="">
                                                                <h6 class="my-0">Edit Your Expirence</h6>
                                                                <small>Teaching , Training ....</small>
                                                            </div>
                                                        </li>
                                                        <li data-btn-id='3'
                                                            class=" dashboard-side list-group-item  d-flex justify-content-between  pointer">
                                                            <div class="">
                                                                <h6 class="my-0">Edit Your Courses</h6>
                                                                <small>Teaching , google ....</small>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class=" dashboard-side list-group-item py-2 d-flex justify-content-between pointer">
                                                            <a class="text-black" href="{{route('home')}}">Home</a>
                                                            <!-- <strong>$20</strong> -->
                                                        </li>
                                                        <li
                                                            class=" dashboard-side list-group-item py-2 d-flex justify-content-between pointer">
                                                            <span>Login Out</span>
                                                            <!-- <strong>$20</strong> -->
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- right slide -->
                            <div class="col-12 col-lg-8  rounded shadow-sm border-gray">
                                <div id='about_section' class="profile_page show info_page col-12 px-5 py-3 order-md-1">
                                    <h4 class="mb-3">Add your Information</h4>
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">First name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder=""
                                                    value="" required>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName">Last name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder=""
                                                    value="" required>
                                                <div class="invalid-feedback">
                                                    Valid last name is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="username"
                                                    placeholder="Username" required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Your username is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="you@example.com">
                                            <div class="invalid-feedback">
                                                Please enter a valid email address for shipping updates.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="1234 Main St" required>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address2">Address 2 <span
                                                    class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="address2"
                                                placeholder="Apartment or suite">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Country</label>
                                                <select class="custom-select d-block w-100" id="country" required>
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid country.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="state">State</label>
                                                <select class="custom-select d-block w-100" id="state" required>
                                                    <option value="">Choose...</option>
                                                    <option>California</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                </div>

                                <!-- second page -->
                                <div class="profile_page skills_page col-12 px-5 py-3 order-md-1">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="mb-0 py-2">Skills</h5>
                                        <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_skills_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                                    </div>
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <p class="font-italic mb-0 ">Web Developer</p>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_skills_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <p class="font-italic mb-0 ">Web Design</p>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_skills_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <p class="font-italic mb-0 ">Frontend Developer</p>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_skills_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- education page -->
                                <div class="profile_page skills_page col-12 px-5 py-3 order-md-1">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="mb-0 py-2">Educations</h5>
                                        <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_educ_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                                    </div>
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <div class=" my-2 pb-3 row">
                                                <div class="col-3">
                                                    <div class="  p-1 border">

                                                        <img class="w-100"
                                                            src="./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg"
                                                            alt="">

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
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_educ_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <div class=" my-2 pb-3 row">
                                                <div class="col-3">
                                                    <div class="p-1 border">
                                                        <img class="w-100"
                                                            src="./assets/images/electronic-technology-vector-business-logo-template-corporate-identity-abstract-chip-sign-global-network-internet-tech-concept-89970966.jpg"
                                                            alt="">
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
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_educ_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- expeinice page -->
                                <div class="profile_page skills_page col-12 px-5 py-3 order-md-1">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="mb-0 py-2">Experince</h5>
                                        <div class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_expie_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                                    </div>
                                    <!-- expirence 1 -->
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <div class="row g-2  py-3">
                                                <div
                                                    class="col-2   text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                                    <div class="icon"> <i class="bi bi-reddit text-black"></i> </div>
                                                </div>
                                                <div class="col-10 px-3">
                                                    <h5>Software Developer</h5>
                                                    <p>Work in : Payoo</p>
                                                    <small>Here I worked as designer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_expie_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- expirence 2 -->
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class="border-bottom col-11 py-3 ">
                                            <div class="row g-2  py-3">
                                                <div
                                                    class="col-2   text-white text-center p-1 d-flex align-items-center justify-content-center rounded">
                                                    <div class="icon"> <i class="bi bi-google text-black"></i> </div>
                                                </div>
                                                <div class="col-10 px-3">
                                                    <h5>Software Developer</h5>
                                                    <p>Work in : Payoo</p>
                                                    <small>Here I worked as designer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_expie_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- cources page -->
                                <div class="profile_page skills_page col-12 px-5 py-3 order-md-1">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="mb-0 py-2">Cources</h5>
                                        <div id='modal_add_skills' class="pointer icon-hover" data-bs-toggle="modal"
                                            data-bs-target="#add_cource_modal"><i class="bi bi-plus"
                                                style="font-size: 2rem; color:gray"></i> </div>
                                    </div>

                                    <!-- cource 1 -->
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class=" col-11 py-3 ">
                                            <div class="border-bottom my-2">
                                                <h6>Google UX</h6>
                                                <p>In 2020 - present</p>
                                                <p class="color-gray">Some description here</p>
                                            </div>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_cource_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- cource 2 -->
                                    <div class=" row rounded  position-relative d-flex py-3">
                                        <div class=" col-11 py-3 ">
                                            <div class="border-bottom my-2">
                                                <h6>Google UX</h6>
                                                <p>In 2020 - present</p>
                                                <p class="color-gray">Some description here</p>
                                            </div>
                                        </div>
                                        <div class=" edit-icon col-1 col-md-1 pointer flex-row justify-content-end">
                                            <div class="icon-hover ">
                                                <!-- Drop down -->
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical circle-icon"
                                                            style="font-size: 1.2rem;"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <p class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#add_cource_modal">Edit</p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item text-danger" data-bs-toggle="modal"
                                                                data-bs-target="#delete_modal">Delete</p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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

    <!-- delete modal -->
    <div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you want to delete this item? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger">Delete</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script  src="./utils/bootstramp/bootstrap.min.js"></script> -->
    <script type='module' src="./js/main.js"></script>
    <script src="./js/dashboard.js"></script>
    <script src="./js/modal.js"></script>
</body>

</html>