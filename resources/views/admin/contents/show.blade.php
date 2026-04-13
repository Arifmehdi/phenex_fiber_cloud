@extends('admin.master')
@section('title',"Admin Dashboard | Content Details")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Content Details</h3>
                            <div class="card-tools">
                                <a href="{{route('contents.index')}}" class="btn btn-sm btn-primary">
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
                                    <th>Name</th>
                                    <td>{{ $data->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>{{ strip_tags($data->content) }}</td>
                                </tr>
                                <tr>
                                    <th>Side Note</th>
                                    <td>{{ strip_tags($data->side_note) ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Accent Color</th>
                                    <td>{{ $data->accent_color ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Icon</th>
                                    <td>{{ $data->icon ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Button Text</th>
                                    <td>{{ $data->button_text ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Button Link</th>
                                    <td>{{ $data->button_link ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection