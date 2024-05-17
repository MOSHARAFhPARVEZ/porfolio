@extends('layouts\backend\dashboard')

@section('content')

{{-- edit banner part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('banner_part.update',$banner->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="banner">
                        <img src="{{ asset('uploads/banner') }}/{{ $banner['banner'] }}" width="100" class="img-fluid rounded-circle" >
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $banner->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description"
                                value="{{ $banner->description }}">
                        </div>
                    </div>
                                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon One</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->icon_one }}" name="icon_one" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link One</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->link_one }}" name="link_one" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Two</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->icon_two }}" name="icon_two" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Two</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->link_two }}" name="link_two" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Three</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->icon_three }}" name="icon_three" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Three</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->link_three }}" name="link_three" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Icon Four</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->icon_four }}" name="icon_four" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Link Four</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $banner->link_four }}" name="link_four" >
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="banner">
                            <label class="custom-file-label">Banner Image</label>
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
{{-- edit banner part end --}}

@endsection
