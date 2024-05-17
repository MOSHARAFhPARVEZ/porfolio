@extends('layouts.backend.dashboard')
@section('content')


{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Frontend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Fast Area Info</a></li>
    </ol>
</div>
{{-- page title part end --}}


{{-- All Success Msg Part Start --}}
<div class="col-lg-12">
    @if (session('succcessms'))
    <div class="alert alert-success solid alert-square">
        {{ session('succcessms') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}



{{-- Show Solution Part Start --}}

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Solution Part Info</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Number</th>
                            <th scope="col">Tittle</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($fast_areas as $fast_area)
                        <tr>
                            <td>{{ $fast_area->id }}</td>
                            <td>{{ $fast_area->icon }}</td>
                            <td>{{ $fast_area->number }}</td>
                            <td>{{ $fast_area->tittle }}</td>
                            <td><span><a href="{{ route('fast_area.edit',$fast_area->id ) }}" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                    </a>
                                    <form action="{{ route('fast_area.destroy',$fast_area->id) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                        title="Close"><i class="fa fa-close color-danger"></i>
                                    </button>
                                    </form>

                                </span>
                            </td>
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

{{-- Show Solution Part End --}}

@endsection
