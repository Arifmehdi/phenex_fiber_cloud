@extends('admin.master')
@section('title',"Admin Dashboard | Section Details")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Section Details</h3>
                            <div class="card-tools">
                                <a href="{{route('sections.index')}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-arrow-left"></i> Back to List
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="200">ID</th>
                                    <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <th>Section Name</th>
                                    <td>{{ $data->section_name }}</td>
                                </tr>
                                <tr>
                                    <th>Template</th>
                                    <td>{{ $data->template ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Serial</th>
                                    <td>{{ $data->serial ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Page</th>
                                    <td>{{ $data->page ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($data->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Side Note</th>
                                    <td>{{ strip_tags($data->side_note) ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection