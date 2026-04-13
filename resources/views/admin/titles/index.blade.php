@extends('admin.master')
@section('title',"Admin Dashboard | All Titles")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Titles</h3>
                            <div class="card-tools d-flex align-items-center">
                                <div class="input-group input-group-sm">
                                <input type="text" name="q" id="titleSearch" class="global-search form-control" data-url="{{ route('admin.global-search-ajax',['type'=>'title']) }}" placeholder="Search title, id...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{route('titles.create')}}" class="btn btn-sm btn-primary ml-2" style="white-space: nowrap;">
                                    <i class="fas fa-plus"></i> Add New Title
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
                                @include('admin.titles.search_data')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).on('keyup', "#titleSearch", function(e){
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
    </script>
@endsection