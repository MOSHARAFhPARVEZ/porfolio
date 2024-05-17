@extends('layouts\backend\dashboard')

@section('content')

{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Banner Info</a></li>
    </ol>
</div>
{{-- page title part end --}}



{{-- add servie part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('banner_part.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Name" name="name" >
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
{{-- add servie part end --}}



@endsection
