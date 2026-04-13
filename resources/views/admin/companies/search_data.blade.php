<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Actions</th>
            <th>Image</th>
            <th>Title</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('admin.companies.edit', $company->id) }}"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    @if ($company->img)
                        <img src="{{ asset('storage/' . $company->img) }}" alt="{{ $company->name }}" width="50">
                    @endif
                </td>
                <td>{{ $company->name }}</td>
                <td>
                    <input type="checkbox" name="toogle" data-url="{{route('admin.companies.active')}}" value="{{$company->id}}" data-toggle="toggle" data-size="sm" {{$company->active==1 ? 'checked' : '' }} data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $companies->links() }}