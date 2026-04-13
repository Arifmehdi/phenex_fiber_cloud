<table class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="30">SL</th>
        <th width="120">Action</th>
        <th>Section</th>
        <th>Feature</th>
        <th>Side Note</th>
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
                        <a class="dropdown-item" href="{{route('features.show',$item->id)}}"><i class="fas fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('features.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="{{route('features.destroy',$item->id)}}" onclick="return confirm('Are you sure?');" style="cursor:pointer;"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
            </td>
            <td>{{ $item->section->section_name ?? '-' }}</td>
            <td>{{ $item->feature }}</td>
            <td>{{ strip_tags($item->side_note) }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">No features found</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{ $data->render() }}