@extends('layouts.admin_master_layout');
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Add new majer</h5>
            @if (Route::currentRouteName() == 'adminEditMejer')
                <form class="card-body" method="POST" action={{ route('adminUpdateMejer', $data->id) }}
                    enctype="multipart/form-data">
                @else
                    <form class="card-body" method="POST" action={{ route('adminUploadMejer') }}
                        enctype="multipart/form-data">
            @endif
            @csrf
            <div class="row g-3">
                <div class="col-md-9">
                    <label class="form-label" for="multicol-username">title</label>
                    <input type="text" id="multicol-username" value='{{ $data->title ?? old('title') }}' name='title'
                        class="form-control" placeholder="Software development" />
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="col-md-3 mt-5">
                    <label class="switch">
                        <input type="checkbox" class="switch-input is-valid" name='is_active' checked=false />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Valid</span>
                    </label>
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
