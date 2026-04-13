@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Price List</h3>
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
                                <th>Actions</th>
                                {{--<th>Image</th>--}}
                                <th>Price Title</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Yearly Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($causes as $cause)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{--<td>
                                        @if ($cause->image)
                                            <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" width="50">
                                        @endif
                                    </td>--}}
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ route('admin.causes.edit', $cause->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('admin.causes.destroy', $cause->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $cause->title }}</td>
                                    <td>{{ $cause->duration }}</td>
                                    <td>{{ $cause->amount }}</td>
                                    <td>{{ number_format($cause->raised_amount, 2) }}</td>
                                    <td>{{ number_format($cause->goal_amount, 2) }}</td>
                                    <td>
                                        @if ($cause->active)
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
                    {{ $causes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
