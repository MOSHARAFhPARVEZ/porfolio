@extends('layouts\backend\dashboard')

@section('content')

{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Info</a></li>
    </ol>
</div>
{{-- page title part end --}}




{{-- all error part  --}}

<div class="col-lg-12">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @if($errors->any())
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            @endif
        </ul>
    </div>
    @endif
</div>

{{-- all error part  --}}



{{-- All Success Msg Part Start --}}
<div class="col-lg-12">
    @if (session('success'))
    <div class="alert alert-success solid alert-square">
        {{ session('success') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}



{{-- add solution part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('info.store') }}" method="POST" >
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Description" name="description" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" name="email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="address" class="form-control" placeholder="Address" name="address" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" placeholder="Phone" name="mobile" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- add solution part end --}}



@endsection
