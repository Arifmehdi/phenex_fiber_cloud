@extends('admin.master')
@section('title',"Admin Dashboard | Feature Details")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Feature Details</h3>
                            <div class="card-tools">
                                <a href="{{route('features.index')}}" class="btn btn-sm btn-primary">
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
                                    <th>Section</th>
                                    <td>{{ $data->section->section_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Feature</th>
                                    <td>{{ $data->feature }}</td>
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