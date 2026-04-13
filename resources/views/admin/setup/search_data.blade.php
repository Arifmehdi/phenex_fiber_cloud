<table class="table table-sm table-bordered table-striped text-nowrap">
    <thead>
    <tr>
        <th width="30">SL</th>
        <th width="150">Action</th>
        <th>Page</th>
        <th>Section</th>
        <th>Title</th>
        <th>SubTitle</th>
        <th>Features</th>
        <th>Status</th>
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
                        <a class="dropdown-item" href="{{route('section-setups.show',$item->id)}}"><i class="fas fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('section-setups.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="{{route('section-setups.toggleActive',$item->id)}}" onclick="return confirm('Toggle status?');" style="cursor:pointer;">
                            <i class="fas fa-{{ $item->active ? 'eye-slash' : 'eye' }}"></i> {{ $item->active ? 'Hide' : 'Show' }}
                        </a>
                        <a class="dropdown-item" href="#" onclick="deleteSetup('{{route('section-setups.destroy',$item->id)}}'); return false;" style="cursor:pointer;"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
            </td>
            <td>{{ $item->page->name_en ?? '-' }}</td>
            <td>{{ $item->section->section_name ?? '-' }}</td>
            <td>{{ $item->title->title ?? '-' }}</td>
            <td>{{ $item->subTitle->title ?? '-' }}</td>
            <td><span class="badge badge-info">{{ $item->features->count() }}</span></td>
            <td>
                @if($item->active)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-secondary">Hidden</span>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">No setups found</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{ $data->render() }}