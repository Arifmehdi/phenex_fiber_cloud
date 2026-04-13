@extends('admin.master')
@section('title',"Admin Dashboard | All Section Setups")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Section Setups</h3>
                            <div class="card-tools d-flex align-items-center">
                                <div class="input-group input-group-sm">
                                <input type="text" name="q" id="setupSearch" class="global-search form-control" data-url="{{ route('admin.global-search-ajax',['type'=>'section']) }}" placeholder="Search page, section, title...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{route('section-setups.create')}}" class="btn btn-sm btn-primary ml-2" style="white-space: nowrap;">
                                    <i class="fas fa-plus"></i> Add New Setup
                                </a>
                            </div>
                        </div>
                        
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive data-container">
                                @include('admin.setup.search_data')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

@endsection

@section('script')
    <script>
        $(document).on('keyup', "#setupSearch", function(e){
            e.preventDefault();
            var url = $(this).attr('data-url');
            var q = $(this).val();
            
            $.ajax({
                 url: url,
                 data : {q:q},
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

        function deleteSetup(url) {
            if(confirm('Are you sure?')) {
                const form = document.getElementById('deleteForm');
                form.action = url;
                form.submit();
            }
        }
    </script>
@endsection