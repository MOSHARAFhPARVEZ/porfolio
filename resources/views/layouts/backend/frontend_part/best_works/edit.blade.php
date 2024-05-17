@extends('layouts\backend\dashboard')

@section('content')



{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Frontend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Best Work Info</a></li>
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
    @if (session('successm'))
    <div class="alert alert-success solid alert-square">
        {{ session('successm') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}



{{-- edit Best Works part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('best_works.update',$best_works->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="banner">
                        <img src="{{ asset('uploads/best_works') }}/{{ $best_works['photo'] }}" width="100" class="img-fluid rounded-circle" >
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Header</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="header" value="{{ $best_works->header }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tittle</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tittle"
                                value="{{ $best_works->tittle }}">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photo">
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
{{-- edit Best Works part end --}}

@endsection
