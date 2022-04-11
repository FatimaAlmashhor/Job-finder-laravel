@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Add new compeny</h5>
            @if (Route::currentRouteName() == 'adminEditCompeny')
                <form class="card-body" method="POST" action={{ route('adminUpdateCompeny', $data->id) }}
                    enctype="multipart/form-data">
                @else
                    <form class="card-body" method="POST" action={{ route('adminUploadCompeny') }}
                        enctype="multipart/form-data">
            @endif
            @csrf
            <div class="input-group">
                <input type="file" class="form-control" name='image' value='{{ $data->icon ?? old(image) }}'
                    id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Icon </label>
                <span class=" text-danger">{{ $errors->first('image') }}</span>
            </div>
            <div class="row g-3 mt-3">
                <div class="col-md-9">
                    <label class="form-label" for="multicol-username">name</label>
                    <input type="text" id="multicol-username" value='{{ $data->name ?? old('name') }}' name='name'
                        class="form-control" placeholder="Software development" />
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="col-md-3 mt-5">
                    <label class="switch">
                        <input type="checkbox" class="switch-input is-valid" value='{{ $data->name ?? 1 }}'
                            name='is_active' checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Valid</span>
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <label class="form-label" for="multicol-username">About the compeny</label>
                <textarea type="text" id="multicol-username" value='{{ $data->descriotion ?? old('des') }}' name='des'
                    class="form-control" placeholder="We are ..."></textarea>
                <span class="text-danger">{{ $errors->first('des') }}</span>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">country</label>
                    <input type="text" id="multicol-username" value='{{ $data->country ?? old('country') }}'
                        name='country' class="form-control" placeholder="Yemen" />
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">city</label>
                    <input type="text" id="multicol-username" name='city' value='{{ $data->city ?? old('city') }}'
                        class="form-control" placeholder="Taiz" />
                    <span class="text-danger">{{ $errors->first('city') }}</span>
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
