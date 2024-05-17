@extends('layouts.backend.dashboard')
@section('content')


{{-- page title part start  --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Frontend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Testimonial Info</a></li>
    </ol>
</div>
{{-- page title part end --}}



{{-- All Success Msg Part Start --}}
<div class="col-lg-12">
    @if (session('succes'))
    <div class="alert alert-success solid alert-square">
        {{ session('succes') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}



{{-- Show Testimonial  Part Start --}}

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Best Testimonial Info</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->position }}</td>
                            <td>{{ $testimonial->comment }}</td>
                            <td>
                                <img src="{{ asset('uploads/testimonial') }}/{{ $testimonial['photo'] }}" width="80">
                            </td>
                            <td><span><a href="{{ route('testimonial.edit',$testimonial->id) }}" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                    </a>
                                    <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST" >
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

{{-- Show Testimonial  Part End --}}

@endsection
