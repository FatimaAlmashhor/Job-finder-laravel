@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-2">skills List</h4>

        <!-- <p class="mb-4">Books </p> -->


        <!-- Permission Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row mx-1">
                        <div class="col-sm-12 col-md-3">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                        class="form-select">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></label></div>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div
                                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1">
                                <div class="me-3">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search<input
                                                type="search" class="form-control" placeholder="Search.."
                                                aria-controls="DataTables_Table_0"></label></div>
                                </div>

                                <!-- <div class="dt-buttons"><button class="dt-button add-new btn btn-primary mb-3 mb-md-0"
                                                                                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                                                                            data-bs-toggle="modal" data-bs-target="#addPermissionModal"><span>Add
                                                                                                                Book</span></button> </div> -->
                                <div class="dt-buttons"><a href='{{ route('adminAddSkill') }}'
                                        class="dt-button add-new btn btn-primary mb-3 mb-md-0" tabindex="0"
                                        aria-controls="DataTables_Table_0" data-bs-target="#addPermissionModal"><span>Add
                                            skill</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-permissions table border-top dataTable no-footer dtr-column"
                        id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                        style="width: 1227px;">
                        <thead>
                            <tr role="row">
                                <th class="control sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 68px; display: none;" aria-label=""></th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    #</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    ID</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    Title</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 280px;"
                                    aria-label="Assigned To">activation</th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 197px;"
                                    aria-label="Actions">Actions</th>
                            </tr>
                        </thead>

                        </tr>
                        </tbody>
                        @foreach ($skills as $skill)
                            <tbody>
                                <tr>
                                    <td> <strong>
                                            {{ $loop->iteration }}</strong></td>
                                    <td>{{ $skill->id }}</td>
                                    <td>
                                        {{ $skill->title }}
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">
                                            {{ $skill->is_active ? 'active' : 'nonactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <form class="dropdown-item" action="/admin/books/edit" method="post">
                                                    <button type="submit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                                                </form>
                                                <form class="dropdown-item" action="/admin/books/delete" method="post">
                                                    <button type="submit"><i class="bx bx-trash me-1"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach


                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing 0 to 0 of 0 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                            data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ skills Table -->


        <!-- Modal -->
        <!-- Add skills Modal -->
        <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-simple">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Add New skill</h3>
                            <p>Permissions you may use and assign to your users.</p>
                        </div>
                        <form id="addPermissionForm" class="row fv-plugins-bootstrap5 fv-plugins-framework"
                            onsubmit="return false" novalidate="novalidate">
                            <div class="col-12 mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="modalPermissionName">Permission Name</label>
                                <input type="text" id="modalPermissionName" name="modalPermissionName"
                                    class="form-control" placeholder="Permission Name" autofocus="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="corePermission">
                                    <label class="form-check-label" for="corePermission">
                                        Set as core permission
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center demo-vertical-spacing">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Create Permission</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Discard</button>
                            </div>
                            <div></div><input type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add skills Modal -->



        <!-- /Modal -->

    </div>
    <!-- / Content -->




    <div class="content-backdrop fade"></div>
    </div>

    <script src="./adminAssests/js/app-access-permission.js"></script>
    <script src="./adminAssests/js/modal-add-permission.js"></script>
    <script src="./adminAssests/js/modal-edit-permission.js"></script>
@endsection
