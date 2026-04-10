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
                                        <th width="150">Action</th>
                                        <th>Status</th>
                                        <th>Page</th>
                                        <th>Section</th>
                                        <th>Title</th>
                                        <th>SubTitle</th>
                                        <th>Features</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('section-setups.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="{{route('section-setups.toggleActive',$item->id)}}" onclick="return confirm('Toggle status?');" style="cursor:pointer;">
                                                            <i class="fas fa-{{ $item->active ? 'eye-slash' : 'eye' }}"></i> {{ $item->active ? 'Hide' : 'Show' }}
                                                        </a>
                                                        <a class="dropdown-item" href="#" onclick="deleteSetup('{{route('section-setups.destroy',$item->id)}}'); return false;" style="cursor:pointer;"><i class="fas fa-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if($item->active)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-secondary">Hidden</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->page->name_en ?? '-' }}</td>
                                            <td>{{ $item->section->section_name ?? '-' }}</td>
                                            <td>{{ $item->title->title ?? '-' }}</td>
                                            <td>{{ $item->subTitle->title ?? '-' }}</td>
                                            <td><span class="badge badge-info">{{ $item->features->count() }}</span></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No setups found</td>
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

    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        function deleteSetup(url) {
            if(confirm('Are you sure?')) {
                const form = document.getElementById('deleteForm');
                form.action = url;
                form.submit();
            }
        }
    </script>
@endsection
