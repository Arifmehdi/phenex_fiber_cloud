@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cause List</h3>
                    <a href="{{ route('admin.causes.create') }}" class="btn btn-primary float-right">Add New</a>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Goal</th>
                                <th>Raised</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($causes as $cause)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($cause->image)
                                            <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" width="50">
                                        @endif
                                    </td>
                                    <td>{{ $cause->title }}</td>
                                    <td>{{ number_format($cause->goal_amount, 2) }}</td>
                                    <td>{{ number_format($cause->raised_amount, 2) }}</td>
                                    <td>
                                        @if ($cause->active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.causes.show', $cause->id) }}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{ route('admin.causes.edit', $cause->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('admin.causes.destroy', $cause->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $causes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
