<table class="table table-borderd table-sm">
    <thead>
        <tr>
            <th>SL</th>
            <th>Action</th>
            <th>Title</th>
            <th>Icon</th>
            <th>Active</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = (($departments->currentPage() - 1) * $departments->perPage() + 1); ?>
        @forelse ($departments as $category)
            <tr>
                <td>{{ $i++ }}</td>

                <td>
                <div class="dropdown show">
                    <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('departments.edit',$category)}}"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{route('departments.destroy', $category) }}" method="post">
                            @csrf
                            @method('delete')
                            <button href="{{route('departments.destroy', $category)}}" class="dropdown-item text-danger" onclick="return confirm('Are you sure? you want to delete this gallery Item?')"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
                </td>
                <td>{{ $category->name_en }}</td>
                <td>
                    <img src="{{ route('imagecache', [ 'template'=>'sbixs','filename' => $category->fi() ]) }}" alt="">
                </td>
                <td>
                    <input type="checkbox" name="toogle" data-url="{{route('departments.active')}}" value="{{$category->id}}" data-toggle="toggle" data-size="sm" {{$category->active==1 ? 'checked' : '' }} data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
                </td>

            </tr>

        @empty
            <tr>
                <td colspan="5" class="text-danger h5 text-center">No Department Found</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $departments->links() }}
