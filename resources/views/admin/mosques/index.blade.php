@extends('admin.master')
@section('title', 'Admin Dashboard | All Mosques')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Mosques</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.mosques.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i> Add New Mosque
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Union</th>
                                            <th>Village</th>
                                            <th>Foundation Year</th>
                                            <th>Secretary Name</th>
                                            <th>Registration Number</th>
                                            <th>Imam Name</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mosques as $key => $mosque)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    @if ($mosque->image)
                                                        <img src="{{ asset('storage/' . $mosque->image) }}"
                                                            alt="{{ $mosque->name }}" style="max-height: 50px;">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>{{ $mosque->name }}</td>
                                                <td>{{ $mosque->address }}</td>
                                                <td>{{ $mosque->union->bn_name ?? '' }}</td>
                                                <td>{{ $mosque->village->bn_name ?? '' }}</td>
                                                <td>{{ $mosque->foundation_year }}</td>
                                                <td>{{ $mosque->secretary_name }}</td>
                                                <td>{{ $mosque->reg_number }}</td>
                                                <td>{{ $mosque->imam_name }}</td>
                                                <td>{{ $mosque->phone }}</td>

                                                <td>{{ $mosque->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.mosques.edit', $mosque->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.mosques.destroy', $mosque->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this mosque?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $mosques->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
