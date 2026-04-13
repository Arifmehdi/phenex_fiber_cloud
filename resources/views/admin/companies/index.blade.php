@extends('admin.master')

@section('body')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Why we List</h3>
                    <a href="{{ route('admin.companies.create') }}" class="btn btn-primary float-right">Add New</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Actions</th>
                                <th>Image</th>
                                <th>Title</th>
                                {{--<th>Phone</th>
                                <th>Address</th>--}}
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ route('admin.companies.edit', $company->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($company->img)
                                            <img src="{{ asset('storage/' . $company->img) }}" alt="{{ $company->name }}" width="50">
                                        @endif
                                    </td>
                                    <td>{{ $company->name }}</td>
                                    {{--<td>{{ $company->phone }}</td>
                                    <td>{{ $company->address }}</td>--}}
                                    <td>
                                        @if ($company->active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
