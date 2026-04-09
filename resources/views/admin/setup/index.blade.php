@extends('admin.master')
@section('title',"Admin Dashboard | All Section Setups")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Section Setups</h3>
                            <div class="card-tools">
                                <a href="{{route('section-setups.create')}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-plus"></i> Add New Setup
                                </a>
                            </div>
                        </div>
                        
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th width="30">SL</th>
                                        <th width="120">Action</th>
                                        <th>Section</th>
                                        <th>Title</th>
                                        <th>SubTitle</th>
                                        <th>Features Count</th>
                                        <th>Side Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{route('section-setups.edit',$item->id)}}" class="btn btn-xs btn-outline-primary" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{route('section-setups.destroy',$item->id)}}" method="post" style="display:inline;" onclick="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-xs btn-outline-danger" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $item->section->section_name ?? '-' }}</td>
                                            <td>{{ $item->title->title ?? '-' }}</td>
                                            <td>{{ $item->subTitle->title ?? '-' }}</td>
                                            <td><span class="badge badge-info">{{ $item->features->count() }}</span></td>
                                            <td>{{ Str::limit($item->side_note, 50) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No setups found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{ $data->render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
