<table class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="30">SL</th>
        <th width="120">Action</th>
        <th>Section</th>
        <th>Price</th>
        <th>Currency</th>
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
                        <a class="dropdown-item" href="{{route('pricings.show',$item->id)}}"><i class="fas fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('pricings.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{route('pricings.destroy',$item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </td>
            <td>{{ $item->section->section_name ?? '-' }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->currency }}</td>
            <td>{{ $item->side_note }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">No pricings found</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{ $data->render() }}