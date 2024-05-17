@extends('layouts.backend.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-primary alert-dismissible alert-alt fade show">

                <strong>{{ auth()->user()->name }}</strong> You Successfully Log In
            </div>
        </div>
    </div>
</div>

{{-- profile part start  --}}
<div class="col-xl-6">
    <div class="card text-white bg-dark">
        <div class="card-header">
            <h5 class="card-title text-white">Profile</h5>
        </div>
        <div class="card-body mb-0">
            @if (auth()->user()->profile_photo)
                <img  src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}" width="300" alt="Card image cap">
            @else
                <img  src="{{ asset('dashboard_assets') }}/images/default_profile_photo.png" width="300" alt="Card image cap">
            @endif
            <div class="div mt-3">
                <a href="{{ route('profile') }}" class="btn btn-light btn-card text-dark">Go To Profile</a>
            </div>
        </div>
        <div class="card-footer bg-transparent border-0 text-white ">Last updateed {{ auth()->user()->created_at }}
        </div>
    </div>
</div>
{{-- profile part end  --}}

@endsection
