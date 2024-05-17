@extends('layouts.backend.dashboard')
@section('content')



{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Testimonial Info</a></li>
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




{{-- add Testimonial part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Testimonial Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Name" name="name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postition</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Postition" name="position" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Comment</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Comment" name="comment" >
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photo" >
                            <label class="custom-file-label">Photo</label>
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
{{-- add Testimonial part end --}}

@endsection
