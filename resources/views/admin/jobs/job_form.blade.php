@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Add new job</h5>
            @if (Route::currentRouteName() == 'adminEditJob')
                <form class="card-body" method="POST" action={{ route('adminUpdateJob', $data->id) }}
                    enctype="multipart/form-data">
                @else
                    <form class="card-body" method="POST" action={{ route('adminUploadJob') }}
                        enctype="multipart/form-data">
            @endif

            @csrf

            <div class="row g-3 mt-3">
                <div class="col-md-9">
                    <label class="form-label" for="multicol-username">Job title</label>
                    <input type="text" id="multicol-username" value='{{ $data->title ?? old('title') }}' name='title'
                        class="form-control" placeholder="Software development" />
                    <span class="text-danger">{{ $errors->first('title') }}</span>
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
            <div class="col-md-12 mt-3">
                <label class="form-label" for="multicol-username">About the job</label>
                <textarea type="text" id="multicol-username" value='{{ $data->description ?? old('des') }}' name='des'
                    class="form-control" placeholder="We are ..."></textarea>
                <span class="text-danger">{{ $errors->first('des') }}</span>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Avrage sallery</label>
                    <input type="text" id="multicol-username" value='{{ $data->sallary ?? old('sallary') }}'
                        name='sallary' class="form-control" placeholder="4000 - 6000" />
                    <span class="text-danger">{{ $errors->first('sallary') }}</span>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Location</label>
                    <input type="text" id="multicol-username" name='location'
                        value='{{ $data->location ?? old('location') }}' class="form-control" placeholder="Taiz" />
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 mb-4">
                    <label for="select2Basic" class="form-label">Compeny</label>
                    <select id="select2Basic" name='compeny' value='{{ $data->description ?? old(compeny) }}'
                        class="select2 form-select form-select-lg" data-allow-clear="true">
                        @foreach ($compenies as $compeny)
                            <option value="{{ $compeny->id }}">{{ $compeny->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="select2Basic" class="form-label">job type</label>
                    <select id="select2Basic" name='jobType' value='{{ $data->description ?? old(jobType) }}'
                        class="select2 form-select form-select-lg" data-allow-clear="true">
                        @foreach ($jobTypes as $jobType)
                            <option value="{{ $jobType->id }}">{{ $jobType->title }}</option>
                        @endforeach
                    </select>
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
