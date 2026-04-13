@extends('admin.master')
@section('title',"Admin Dashboard | Section Setup Details")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Section Setup Details</h3>
                            <div class="card-tools">
                                <a href="{{route('section-setups.index')}}" class="btn btn-sm btn-primary">
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
                                    <th>Status</th>
                                    <td>
                                        @if($data->active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Hidden</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Page</th>
                                    <td>{{ $data->page->name_en ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Section</th>
                                    <td>{{ $data->section->section_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $data->title->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>SubTitle</th>
                                    <td>{{ $data->subTitle->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>{{ $data->content->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Pricing</th>
                                    <td>{{ $data->pricing->price ?? '-' }} {{ $data->pricing->currency ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Features</th>
                                    <td>
                                        @forelse($data->features as $feature)
                                            <span class="badge badge-info">{{ $feature->feature }}</span>
                                        @empty
                                            -
                                        @endforelse
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