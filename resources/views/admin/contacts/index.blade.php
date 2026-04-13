@extends('admin.master')
@section('title', 'Admin Dashboard | Contact Messages')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Contact Messages</h3>
                            <div class="card-tools d-flex align-items-center">
                                <div class="input-group input-group-sm">
                                <input type="text" name="q" id="contactSearch" class="global-search form-control" data-url="{{ route('admin.global-search-ajax',['type'=>'contact']) }}" placeholder="Search name, email, subject...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive data-container">
                                @include('admin.contacts.search_data', ['data' => $contacts])
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
        $(document).on('keyup', "#contactSearch", function(e){
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