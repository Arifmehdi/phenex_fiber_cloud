@extends('admin.master')
@section('title',"Admin Dashboard | All Departments")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Departments</h3>
                            <div class="card-tools d-flex align-items-center">
                                <div class="input-group input-group-sm">
                                <input type="text" name="q" id="departmentSearch" class="global-search form-control" data-url="{{ route('admin.global-search-ajax',['type'=>'department']) }}" placeholder="Search name, id...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{ route('departments.create') }}" class="btn btn-sm btn-primary ml-2" style="white-space: nowrap;">
                                    <i class="fas fa-plus"></i> Add New Department
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive data-container">
                                @include('admin.departments.search_data')
                            </div>
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
                var id = that.val();
                var mode = that.prop('checked');
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

            $(document).on('keyup', "#departmentSearch", function(e){
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
                            $(".data-container").empty().append(res.html);
                        }
                    }
                });
            });
        });
    </script>
@endpush
