<div class="table-responsive">
<table id="example1" class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="20">SL</th>
        <th width="100">Action</th>
        <th>Title</th>
        <th>Image</th>
        <th>Active</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php $i = (($newses->currentPage() - 1) * $newses->perPage() + 1); ?>
    @foreach($newses as $news)
        <tr>
            <td>{{$i++}}</td>
            <td>
                <div class="dropdown show">
                    <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('news.show',$news->id)}}"><i class="fa fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('news.edit',$news->id)}}"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{route('news.destroy',$news->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </td>
            <td>{{$news->title}}</td>
            <td>
                <img  src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $news->fi()]) }}" alt="post">
            </td>
            <td>
                <input type="checkbox" name="toogle" data-url="{{route('admin.news.active')}}" value="{{$news->id}}" data-toggle="toggle" data-size="sm" {{$news->active==1 ? 'checked' : '' }} data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
            </td>
            <td>{{$news->status}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
{{ $newses->render() }}
</div>



