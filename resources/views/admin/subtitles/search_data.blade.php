<table class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="30">SL</th>
        <th width="120">Action</th>
        <th>SubTitle</th>
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
                        <a class="dropdown-item" href="{{route('subtitles.show',$item->id)}}"><i class="fas fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('subtitles.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{route('subtitles.destroy',$item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </td>
            <td>{{ $item->title }}</td>
            <td>{{ strip_tags($item->side_note) }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No subtitles found</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{ $data->render() }}