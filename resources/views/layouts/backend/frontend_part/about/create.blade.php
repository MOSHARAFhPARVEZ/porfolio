@extends('layouts.backend.dashboard')

@section('content')

{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add About Info</a></li>
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
    @if (session('succ'))
    <div class="alert alert-success solid alert-square">
        {{ session('succ') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}




{{-- add about part start --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add About Info</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Description" name="long_description">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. One year</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. One year" name="edu_one_year">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. One Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Edu. One Name" name="edu_one_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. One Mark</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. One Mark" name="edu_one_mark">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Two year</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Two year" name="edu_two_year">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Two Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Edu. Two Name" name="edu_two_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Two Mark</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Two Mark" name="edu_two_mark">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Three year</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Three year"
                                name="edu_three_year">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Three Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Edu. Three Name" name="edu_three_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Three Mark</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Three Mark"
                                name="edu_three_mark">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Four year</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Four year" name="edu_four_year">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Four Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Edu. Four Name" name="edu_four_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Edu. Four Mark</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Edu. Four Mark" name="edu_four_mark">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photo">
                            <label class="custom-file-label">About Image</label>
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
{{-- add about part end --}}

@endsection
