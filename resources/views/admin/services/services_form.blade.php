@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Add new service</h5>
            @if (Route::currentRouteName() == 'adminEditServices')
                <form class="card-body" method="POST" action={{ route('adminUpdateServices', $data->id) }}
                    enctype="multipart/form-data">
                @else
                    <form class="card-body" method="POST" action={{ route('adminUploadServices') }}
                        enctype="multipart/form-data">
            @endif
            @csrf
            <div class="input-group mt-3">
                <input type="file" class="form-control" name='image' id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload Image </label>
                <span class=" text-danger">{{ $errors->first('image') }}</span>
            </div>
            <div class="row g-3 mt-3">
                <div class="col-md-9">
                    <label class="form-label" for="multicol-username">title</label>
                    <input type="text" id="multicol-username" value='{{ $data->title ?? old('title') }}' name='title'
                        class="form-control" placeholder="Software development" />
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="col-md-3 mt-5">
                    <label class="switch">
                        <input type="checkbox" class="switch-input is-valid" name='is_active' value='1' checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Valid</span>
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <label class="form-label" for="multicol-username">Description</label>
                <textarea type="text" id="multicol-username" value='{{ $data->description ?? old('des') }}' name='des'
                    class="form-control" placeholder="We are ..."></textarea>
                <span class="text-danger">{{ $errors->first('des') }}</span>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
            </form>
        </div>
    </div>
@endsection
