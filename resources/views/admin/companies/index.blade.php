@extends('admin.master')
@section('title',"Admin Dashboard | All Companies")
@section('body')
<section class="content py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Companies</h3>
                        <div class="card-tools d-flex align-items-center">
                            <div class="input-group input-group-sm">
                            <input type="text" name="q" id="companySearch" class="global-search form-control" data-url="{{ route('admin.global-search-ajax',['type'=>'company']) }}" placeholder="Search name, id...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('admin.companies.create') }}" class="btn btn-sm btn-primary ml-2" style="white-space: nowrap;">
                                <i class="fas fa-plus"></i> Add New Company
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="card-body p-0 mb-0">
                        <div class="table-responsive">
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
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('input[name=toogle]').change(function(){
            var that = $(this);
            var url = that.attr('data-url');
            var mode = that.prop('checked');
            var id = that.val();
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    mode: mode,
                    id: id,
                },
                success: function(response) {
                    if(response.status) {
                        alert(response.msg);
                    } else {
                        alert('please try again');
                    }
                }
            });
        });

        $(document).on('keyup', "#companySearch", function(e){
            e.preventDefault();
            var url = $(this).attr('data-url');
            var q = $(this).val();
            $.ajax({
                url: url,
                data: {q:q},
                method: "get",
                success: function(res)
                {
                    if(res.success)
                    {
                        $(".table-responsive").empty().append(res.html);
                    }
                }
            });
        });
    });
</script>
@endpush
