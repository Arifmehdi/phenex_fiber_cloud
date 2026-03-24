@extends('admin.master')
@section('title', "Admin Dashboard | User Details")
@section('body')
<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">User Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 150px">Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $user->mobile ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $user->address ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Designation</th>
                                <td>{{ $user->designation ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Membership Type</th>
                                <td>
                                    @if($user->membership_type == 1)
                                        Member
                                    @elseif($user->membership_type == 2)
                                        Volunteer
                                    @elseif($user->membership_type == 3)
                                        Other
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Short Bio</th>
                                <td>{{ $user->short_bio ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Facebook URL</th>
                                <td>{{ $user->fb_url ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Twitter URL</th>
                                <td>{{ $user->twitter_url ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Instagram URL</th>
                                <td>{{ $user->insta_url ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>YouTube URL</th>
                                <td>{{ $user->yt_url ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Local URL</th>
                                <td>{{ $user->local_url ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>
                                    @if($user->image)
                                        <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" width="150">
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>
                                    @if(isset($user->roles))
                                        @foreach($user->roles as $role)
                                            <span class="badge badge-primary">{{ $role->role_name }}</span>
                                        @endforeach
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
