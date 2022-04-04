@extends('layouts.client_master_layout');
@section('content')
<main class="my-6">
  <!-- search section  -->
  <div class="container my-sm-5 position-sticky">
    <div class="row my-4 d-flex justify-content-center align-items-center">
      <div class="col-md-10">
        <div class=" row gx-1 gy-2 align-items-center">
          <div class="col-12 col-lg-7">
            <div class="form  ">
              <i class="fa fa-search"></i>
              <input id='what_search' type="text" class="form-control form-input" placeholder="What ?"> <span
                class="left-pan"><i class="bi bi-search"></i></span>
            </div>
          </div>
          <div class="col-12 col-lg-3 ">
            <div class="form"> <i class="fa fa-search"></i> <input id='where_search' type="text"
                class="form-control form-input" placeholder="Where ?"> <span class="left-pan"><i
                  class="bi bi-geo-alt"></i></span> </div>
          </div>
          <div class=" col-3 col-lg-2">
            <button class="btn bg-primary text-white py-2 px-4">Find</button>
          </div>
        </div>
        <div class="mt-3 mx-1">
          <div class="d-flex flex-row gx-2 gy-1 flex-wrap">
            <div class="bg-white-gray p-2  color-gray border-gray pointer">
              <i class="bi bi-plus"></i> <span>Frontent Developer</span>
            </div>
            <div class="bg-white-gray p-2 me-1 rounded-1 pointer color-gray border-gray">
              <i class="bi bi-plus"></i> <span>Programmer</span>
            </div>
            <div class="bg-white-gray p-2 me-1 rounded-1 color-gray pointer border-gray">
              <i class="bi bi-plus"></i> <span>Data analsis</span>
            </div>
            <div class="bg-white-gray p-2 me-1 rounded-1 color-gray pointer border-gray">
              <i class="bi bi-plus"></i> <span>Doctor</span>
            </div>
            <div class="bg-white-gray p-2 me-1 rounded-1 color-gray pointer border-gray">
              <i class="bi bi-plus"></i> <span>Manger</span>
            </div>
            <div class="bg-white-gray p-2 me-1 rounded-1 color-gray pointer border-gray">
              <i class="bi bi-plus"></i> <span>Engneer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jobs  section  -->
  <section>
    <div class="container ">
      <div class="row w-full d-flex flex-row gx-3">
        <div class="col-12 container">
          <!-- More filter  -->
          <div class="more_filter ">
            <div class="d-flex flex-row circle-btns align-items-center">
              <div id='more_filter' class="filter_title shadow pointer bg-info mx-auto h-100 px-2 py-3">
                More Filter
              </div>
              <div class="filter_body bg-light  w-0 d-flex  align-items-center ">
                <!-- fillter all -->
                <div id='all_btn' class="btn bg-warning  rounded-pill mx-1">All</div>
                <!-- type job filter -->
                <div class="dropdown ">
                  <button class="btn bg-white border rounded-pill dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Job Type
                  </button>
                  <ul class="dropdown-menu fade" aria-labelledby="dropdownMenuButton1">
                    <form id='job_type_filter'>
                      <li class="px-3 py-2">
                        <input type="checkbox" id='fulltime' value='full time' class="mx-1"
                          style="width: 20px ; height : 20px" />
                        <label for="fulltime"> Full time</label>
                      </li>
                      <li class="px-3 py-2">
                        <input type="checkbox" id='parttime' value='part time' class="mx-1"
                          style="width: 20px ; height : 20px" />
                        <label for="parttime"> Part time</label>
                      </li>
                    </form>
                  </ul>
                </div>

                <!-- company filter -->
                <div class="dropdown mx-1">
                  <button class="btn bg-white border rounded-pill dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Campany
                  </button>
                  <ul class="dropdown-menu fade " aria-labelledby="dropdownMenuButton1">
                    <form id='company_filter'>
                      <li class="px-1 py-2">
                        <input type="text" id='search_company' class="mx-1 input-group-lg p-1"
                          placeholder="Campany name.." />
                      </li>
                      <li class="px-1 py-2">
                        <input type="checkbox" vlaue='Riddle' class="mx-1" style="width: 20px ; height : 20px" />
                        <label> Google</label>
                      </li>
                      <li class="px-1 py-2">
                        <input type="checkbox" class="mx-1" value='Riddle' style="width: 20px ; height : 20px" />
                        <label for='riddle'> Riddle</label>
                      </li>
                      <li class="px-1 py-2">
                        <input type="checkbox" value='facebook' class="mx-1" style="width: 20px ; height : 20px" />
                        <label>Facebook</label>
                      </li>
                    </form>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class=" col-12 col-lg-5  ">

          <!-- left slide -->
          <div class=" d-flex w-100 flex-column">

            <!-- first Item -->
            <div class="job_post card text-black p-3 mb-2">
              <div class="d-flex justify-content-between pointer">

                <div>
                  <a href={{route('jobdetails')}} class="text-black">
                    <h3 class="heading job_title">Software Architect</h3>
                  </a>
                  <p class="m-0 p-1 text-black compeny_name">Riddle </p>
                  <!-- location and remote  -->
                  <div class="d-flex flex-row align-items-center">
                    <p class=" p-1 color-gray job_location">US - lose anglous</p>
                    <p class="p-1 mx-2 job_remote">Remote</p>
                  </div>
                  <!-- div the price and work -->
                  <div class="d-flex flex-row">
                    <div
                      class='badge  bg-white-gray border-gray d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray">$2000 - $3000</p>
                    </div>
                    <div
                      class='badge mx-3 bg-white-gray border-gray text-black d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray job_type">Full time</p>
                    </div>
                  </div>

                  <!-- the position -->
                  <p class="m-0 mt-2 p-1 text-black">Position </p>
                  <div class="d-flex flex-row gx-1 my-0">
                    <div class="badge "> <span class="p-2">React</span> </div>
                    <div class="badge "> <span class="p-2">Node</span> </div>
                    <div class="badge "> <span class="p-2">Docker</span> </div>
                  </div>
                </div>
                <div class="badge text-black"> <i class="bi bi-bookmark  save-icon" style="font-size: 1.5rem;"></i>
                </div>
              </div>
              <div class="m-0">
                <!-- <h3 class="heading">Software Architect <br>Java - USA</h3> -->
                <div class="mt-2 me-1">

                  <div class="mt-1"> <span class="active-post"> Active - <span class="text2"> 3 days ago</span></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- second item -->
            <div class="job_post card text-black p-3 mb-2">
              <div class="d-flex justify-content-between pointer">

                <div>
                  <a href={{route('jobdetails')}} class="text-black">
                    <h3 class="heading job_title">Project Manger</h3>
                  </a>
                  <p class="m-0 p-1 text-black compeny_name">Facebook </p>
                  <!-- location and remote  -->
                  <div class="d-flex flex-row align-items-center">
                    <p class=" p-1 color-gray job_location">Yemen</p>
                    <p class="p-1 mx-2 job_remote"></p>
                  </div>
                  <!-- div the price and work -->
                  <div class="d-flex flex-row">
                    <div
                      class='badge  bg-white-gray border-gray d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray">$2000 - $3000</p>
                    </div>
                    <div
                      class='badge mx-3 bg-white-gray border-gray text-black d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray job_type">Full time</p>
                    </div>
                  </div>

                  <!-- the position -->
                  <p class="m-0 mt-2 p-1 text-black">Position </p>
                  <div class="d-flex flex-row gx-1 my-0">
                    <div class="badge "> <span class="p-2">React</span> </div>
                    <div class="badge "> <span class="p-2">Node</span> </div>
                    <div class="badge "> <span class="p-2">Docker</span> </div>
                  </div>
                </div>
                <div class="badge text-black"> <i class="bi bi-bookmark  save-icon" style="font-size: 1.5rem;"></i>
                </div>
              </div>
              <div class="m-0">
                <!-- <h3 class="heading">Software Architect <br>Java - USA</h3> -->
                <div class="mt-2 me-1">

                  <div class="mt-1"> <span class="active-post"> Active - <span class="text2"> 3 days ago</span></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- thired item -->
            <div class="job_post card text-black p-3 mb-2">
              <div class="d-flex justify-content-between pointer">
                <div>
                  <a href={{route('jobdetails')}} class="text-black">
                    <h3 class="heading job_title">Software Engneer</h3>
                  </a>
                  <p class="m-0 p-1 text-black compeny_name">Apple </p>
                  <!-- location and remote  -->
                  <div class="d-flex flex-row align-items-center">
                    <p class=" p-1 color-gray job_location">Italy</p>
                    <p class="p-1 mx-2 job_remote">Remote</p>
                  </div>
                  <!-- div the price and work -->
                  <div class="d-flex flex-row">
                    <div
                      class='badge  bg-white-gray border-gray d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray">$2000 - $3000</p>
                    </div>
                    <div
                      class='badge mx-3 bg-white-gray border-gray text-black d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray job_type">Full time</p>
                    </div>
                  </div>

                  <!-- the position -->
                  <p class="m-0 mt-2 p-1 text-black">Position </p>
                  <div class="d-flex flex-row gx-1 my-0">
                    <div class="badge "> <span class="p-2">React</span> </div>
                    <div class="badge "> <span class="p-2">Node</span> </div>
                    <div class="badge "> <span class="p-2">Docker</span> </div>
                  </div>
                </div>
                <div class="badge text-black"> <i class="bi bi-bookmark  save-icon" style="font-size: 1.5rem;"></i>
                </div>
              </div>
              <div class="m-0">
                <!-- <h3 class="heading">Software Architect <br>Java - USA</h3> -->
                <div class="mt-2 me-1">

                  <div class="mt-1"> <span class="active-post"> Active - <span class="text2"> 3 days ago</span></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- forth item -->
            <div class="job_post card text-black p-3 mb-2">
              <div class="d-flex justify-content-between pointer">

                <div>
                  <a href={{route('jobdetails')}} class="text-black">
                    <h3 class="heading job_title">Software Architect</h3>
                  </a>
                  <p class="m-0 p-1 text-black compeny_name">Riddle </p>
                  <!-- location and remote  -->
                  <div class="d-flex flex-row align-items-center">
                    <p class=" p-1 color-gray job_location">US - lose anglous</p>
                    <p class="p-1 mx-2 job_remote">Remote</p>
                  </div>
                  <!-- div the price and work -->
                  <div class="d-flex flex-row">
                    <div
                      class='badge  bg-white-gray border-gray d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray">$2000 - $3000</p>
                    </div>
                    <div
                      class='badge mx-3 bg-white-gray border-gray text-black d-flex flex-row justify-content-center align-items-center'>
                      <p class="m-0 p-1 color-gray job_type">Full time</p>
                    </div>
                  </div>

                  <!-- the position -->
                  <p class="m-0 mt-2 p-1 text-black">Position </p>
                  <div class="d-flex flex-row gx-1 my-0">
                    <div class="badge "> <span class="p-2">React</span> </div>
                    <div class="badge "> <span class="p-2">Node</span> </div>
                    <div class="badge "> <span class="p-2">Docker</span> </div>
                  </div>
                </div>
                <div class="badge text-black"> <i class="bi bi-bookmark  save-icon" style="font-size: 1.5rem;"></i>
                </div>
              </div>
              <div class="m-0">
                <!-- <h3 class="heading">Software Architect <br>Java - USA</h3> -->
                <div class="mt-2 me-1">

                  <div class="mt-1"> <span class="active-post"> Active - <span class="text2"> 3 days ago</span></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- the right section -->
        <div class=" col-7 d-none d-lg-flex mb-2  position-sticky">
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
                    <p class="p-1 mx-2"> . Remote</p>
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
                <div class="badge text-black"> <i class="bi bi-bookmark  save-icon" style="font-size: 1.5rem;"></i>
                </div>
              </div>
            </div>

            <!-- body job -->

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
                <small>We are a modern, high quality specialty dental practice seeking a true team player to join our
                  fun and professional family. Our office is an extremely safe environment with infection control
                  protocols that go far beyond current standards.</small>
                <br />
                <br />
                <small>
                  If you are a nice, honest, and reliable team player, we will train you on the rest. Our biggest
                  requirement: you have to enjoy your work and be a people person - after all, we spend a lot of time
                  together.
                </small>
              </div>


              <div class="section border-bottom my-3 py-3">
                <h4>Location
                </h4>
                <small> Stonestown Endodontics in San Francisco, CA 94132</small>
                <br />
                <br />

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script type='module' src="./js/search.js"></script>
 
@endsection
