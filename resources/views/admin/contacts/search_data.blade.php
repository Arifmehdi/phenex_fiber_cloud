<table class="table table-striped">
    <thead>
        <tr>
            <th>SL</th>
            <th>Actions</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Received At</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $key => $contact)
            <tr>
                <td>{{ ++$key }}</td>
                <td>
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('admin.contacts.show', $contact->id) }}"><i class="fas fa-eye"></i> View</a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this message?');"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->created_at->format('d M, Y h:i A') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No contacts found</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $data->links() }}