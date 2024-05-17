@extends('layouts.backend.dashboard')
@section('content')



{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Banner Info</a></li>
    </ol>
</div>
{{-- page title part end --}}

{{-- add banner part start --}}
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
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="banner" >
                            <label class="custom-file-label">Banner Image</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon One</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Icon One" name="icon_one" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link One</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Link One" name="link_one" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Two</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Icon Two" name="icon_two" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Two</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Link Two" name="link_two" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Three</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Icon Three" name="icon_three" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Three</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Link Three" name="link_three" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Four</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Icon Four" name="icon_four" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Four</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Link Four" name="link_four" >
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
{{-- add banner part end --}}

@endsection
