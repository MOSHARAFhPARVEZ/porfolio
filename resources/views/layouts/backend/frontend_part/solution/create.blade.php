@extends('layouts\backend\dashboard')

@section('content')

{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add solution Info</a></li>
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

                <form action="{{ route('solution.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Header</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Header" name="header" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Description" name="description" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Icon" name="icon" >
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
