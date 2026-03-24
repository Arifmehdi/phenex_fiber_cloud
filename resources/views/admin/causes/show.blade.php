@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cause Details: {{ $cause->title }}</h3>
                    <a href="{{ route('admin.causes.index') }}" class="btn btn-secondary float-right">Back to List</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 150px">Title</th>
                            <td>{{ $cause->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $cause->slug }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                @if ($cause->image)
                                    <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" width="200">
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $cause->short_description ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $cause->description ?? 'N/A' !!}</td>
                        </tr>
                        <tr>
                            <th>Goal Amount</th>
                            <td>{{ number_format($cause->goal_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <th>Raised Amount</th>
                            <td>{{ number_format($cause->raised_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <th>Active</th>
                            <td>
                                @if ($cause->active)
                                    <span class="badge badge-success">Yes</span>
                                @else
                                    <span class="badge badge-danger">No</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Added By</th>
                            <td>{{ $cause->addedBy->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Last Edited By</th>
                            <td>{{ $cause->editedBy->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $cause->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $cause->updated_at }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('admin.causes.edit', $cause->id) }}" class="btn btn-warning mt-3">Edit Cause</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
