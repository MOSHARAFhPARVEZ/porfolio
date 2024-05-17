@extends('layouts.backend.dashboard')

@section('content')

{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
</div>
{{-- page title part end --}}

{{-- all error part  --}}

<div class="col-lg-12">
    @if ($errors->any())
    <div class="alert alert-danger solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
            <line x1="12" y1="9" x2="12" y2="13"></line>
            <line x1="12" y1="17" x2="12.01" y2="17"></line>
        </svg>
        <ul>
            @if($errors->any())
            @foreach ($errors->all() as $error)
            <li><strong>Warning!</strong>{{ $error }}</li>
            @endforeach
            @endif
        </ul>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>


    @endif
</div>

{{-- all error part  --}}

{{-- all success msg part start  --}}

{{-- Profile Photo Upload Success msg part --}}
@if (session('succ'))
<div class=" col-lg-12 alert alert-success alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <polyline points="9 11 12 14 22 4"></polyline>
        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
    </svg>
    <strong>{{ session('succ') }}</strong>
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
</div>
@endif
{{-- Profile Photo Upload Success msg part --}}


{{-- Cover Photo Upload Success msg part --}}
@if (session('succm'))
<div class=" col-lg-12 alert alert-success alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <polyline points="9 11 12 14 22 4"></polyline>
        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
    </svg>
    <strong>{{ session('succm') }}</strong>
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
</div>
@endif
{{-- Cover Photo Upload Success msg part --}}


{{-- password Change Success msg part --}}
@if (session('success'))
<div class=" col-lg-12 alert alert-success alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <polyline points="9 11 12 14 22 4"></polyline>
        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
    </svg>
    <strong>{{ session('success') }}</strong>
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
</div>
@endif
{{-- password Change Success msg part --}}


{{-- profile part start  --}}
<div class="col-lg-12">
    <div class="profile card card-body px-3 pt-3 pb-0">
        <div class="profile-head">
            <div class="photo-content">
                <div class="cover-photo">
                    @if (auth()->user()->cover_photo)
                    <img src="{{ asset('uploads/cover_photo') }}/{{ auth()->user()->cover_photo }}" class="img-fluid "
                        alt="">
                    @else
                    <img src="{{ asset('dashboard_assets') }}/images/default_cover_photo.jpeg" class="img-fluid "
                        alt="">
                    @endif
                </div>
            </div>
            <div class="profile-info">
                <div class="profile-photo">
                    @if (auth()->user()->profile_photo)
                    <img src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}"
                        class="img-fluid rounded-circle" alt="">
                    @else
                    <img src="{{ asset('dashboard_assets') }}/images/default_profile_photo.png"
                        class="img-fluid rounded-circle" alt="">
                    @endif
                </div>
                <div class="profile-details">
                    <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0">{{ auth()->user()->name }}</h4>
                        <p>UX / UI Designer</p>
                    </div>
                    <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
                        <p>Email</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- profile part end  --}}


{{-- upload profile photo part start  --}}

<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile Photo Upload</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('profile_photo') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profile_photo">
                            <label class="custom-file-label">Choose profile photo</label>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-rounded btn-outline-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- upload profile photo part end  --}}





{{-- upload cover photo part start  --}}

<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Cover Photo Upload</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('cover_photo') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cover_photo">
                            <label class="custom-file-label">Choose profile photo</label>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-rounded btn-outline-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- upload cover photo part end  --}}


{{-- Password Change part Start  --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Password Change</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('pass_Cng') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter Your Old Password"
                                name="old_password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter Your New Password"
                                name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter Your Confirm Password"
                                name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-rounded btn-outline-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Password Change part End  --}}





@endsection
