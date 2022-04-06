@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Add new compeny</h5>
            <form class="card-body" method="POST" action={{ route('adminUploadCompeny') }}
                enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" class="form-control" name='image' id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Icon </label>
                </div>
                <div class="row g-3">
                    <div class="col-md-9">
                        <label class="form-label" for="multicol-username">name</label>
                        <input type="text" id="multicol-username" name='name' class="form-control"
                            placeholder="Software development" />
                    </div>
                    <div class="col-md-3 mt-5">
                        <label class="switch">
                            <input type="checkbox" class="switch-input is-valid" value='1' name='is_active' checked />
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Valid</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="multicol-username">About the compeny</label>
                    <textarea type="text" id="multicol-username" name='des' class="form-control" placeholder="We are ..."></textarea>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">country</label>
                        <input type="text" id="multicol-username" name='country' class="form-control"
                            placeholder="Yemen" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">city</label>
                        <input type="text" id="multicol-username" name='city' class="form-control" placeholder="Taiz" />
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
