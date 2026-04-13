<div class="table-responsive">
<table id="example1" class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="20">SL</th>
        <th width="100">Action</th>
        <th>Name</th>
        <th>Active</th>
    </tr>
    </thead>
    <tbody>
        <?php $i = (($categories->currentPage() - 1) * $categories->perPage() + 1); ?>
    @foreach($categories as $category)
        <tr>
            <td>{{$i++}}</td>
            <td>
                <div class="dropdown show">
                    <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('categories.show',$category->id)}}"><i class="fa fa-eye"></i> View</a>
                        <a class="dropdown-item" href="{{route('categories.edit',$category->id)}}"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </td>
            <td>{{$category->name}}</td>
            <td>
                <input type="checkbox" name="toogle" data-url="{{route('category.active')}}" value="{{$category->id}}" data-toggle="toggle" data-size="sm" {{$category->active==1 ? 'checked' : '' }} data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

{{ $categories->render() }}
</div>
