<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Actions</th>
            <th>Title</th>
            <th>Duration</th>
            <th>Amount</th>
            <th>Discount</th>
            <th>Annual</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($causes as $cause)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('admin.causes.edit', $cause->id) }}"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.causes.destroy', $cause->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>{{ $cause->title }}</td>
                <td>{{ $cause->duration }}</td>
                <td>{{ $cause->amount }}</td>
                <td>{{ number_format($cause->raised_amount, 2) }}</td>
                <td>{{ number_format($cause->goal_amount, 2) }}</td>
                <td>
                    <input type="checkbox" name="toogle" data-url="{{route('admin.causes.active')}}" value="{{$cause->id}}" data-toggle="toggle" data-size="sm" {{$cause->active==1 ? 'checked' : '' }} data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $causes->links() }}