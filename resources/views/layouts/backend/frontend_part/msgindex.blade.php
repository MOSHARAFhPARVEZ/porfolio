@extends('layouts.backend.dashboard')
@section('content')


{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Msgyou</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Msgyou Info</a></li>
    </ol>
</div>
{{-- page title part end --}}





{{-- Show msgyou Part Start --}}

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">msgyou Part Info</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Msg</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($msgindexs as $msgindex)
                        <tr>
                            <td>{{ $msgindex->id }}</td>
                            <td>{{ $msgindex->name }}</td>
                            <td>{{ $msgindex->email }}</td>
                            <td>{{ $msgindex->msg }}</td>
                        </tr>
                        @empty
                            <div class="alert alert-danger solid alert-square "><strong>Error!</strong> No data found.</div>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Show msgyou Part End --}}

@endsection

