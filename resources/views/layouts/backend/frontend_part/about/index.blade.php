@extends('layouts\backend\dashboard')

@section('content')

{{-- page title part start  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Forntend</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Show About Info</a></li>
    </ol>
</div>
{{-- page title part end --}}


{{-- All Success Msg Part Start --}}
<div class="col-lg-12">
    @if (session('succes'))
    <div class="alert alert-danger solid alert-square">
        {{ session('succes') }}
    </div>
    @endif
</div>
{{-- All Success Msg Part End --}}


{{-- Show About Part Start --}}

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">About Part Info</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">S.L.</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Edu. One year</th>
                            <th scope="col">Edu. One Name</th>
                            <th scope="col">Edu. One Mark</th>
                            <th scope="col">Edu. Two year</th>
                            <th scope="col">Edu. Two Name</th>
                            <th scope="col">Edu. Two Mark</th>
                            <th scope="col">Edu. Three year</th>
                            <th scope="col">Edu. Three Name</th>
                            <th scope="col">Edu. Three Mark</th>
                            <th scope="col">Edu. Four year</th>
                            <th scope="col">Edu. Four Name</th>
                            <th scope="col">Edu. Four Mark</th>
                            <th scope="col">About Image</th>
                            
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($abouts as $about)
                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>{{ $about->long_description }}</td>
                            <td>{{ $about->edu_one_year }}</td>
                            <td>{{ $about->edu_one_name }}</td>
                            <td>{{ $about->edu_one_mark }}</td>
                            <td>{{ $about->edu_two_year }}</td>
                            <td>{{ $about->edu_two_name }}</td>
                            <td>{{ $about->edu_two_mark }}</td>
                            <td>{{ $about->edu_three_year }}</td>
                            <td>{{ $about->edu_three_name }}</td>
                            <td>{{ $about->edu_three_mark }}</td>
                            <td>{{ $about->edu_four_year }}</td>
                            <td>{{ $about->edu_four_name }}</td>
                            <td>{{ $about->edu_four_mark }}</td>
                            <td>
                                <img src="{{ asset('uploads/about_photo') }}/{{ $about['photo'] }}" width="80">
                            </td>
                            <td><span><a href="{{ route('about.edit',$about->id) }}" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                    </a>
                                    <form action="{{ route('about.destroy',$about->id) }}" method="POST" >
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

{{-- Show About Part End --}}

@endsection
