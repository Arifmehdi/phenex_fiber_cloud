@extends('admin.master')
@section('title',"Admin Dashboard | All News")
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
<div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All News</h3>
                            <div class="card-tools d-flex align-items-center">
                                <div class="input-group input-group-sm">
                                <input type="text" name="q" id="newsSearch" class="global-search form-control float-right" data-url="{{ route('admin.global-search-ajax',['type'=>'post']) }}" placeholder="Search title, id...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{route('news.create')}}" class="btn btn-sm btn-primary ml-2" style="white-space: nowrap;">
                                    <i class="fas fa-plus"></i> Add New News
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-0 mb-0" style="overflow: visible;">
                            <div class="table-responsive data-container">
                                @include('admin.news.search_data')
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
        $( document ).ready(function() {

            $('input[name=toogle]').change(function(){
                var that = $( this );
                var url  = that.attr('data-url');
                var id   = that.val()
                var mode = that.prop('checked');
                $.ajax({
                    url : url,
                    type: "POST",
                    data:{
                        _token:'{{csrf_token()}}',
                        mode:mode,
                        id:id,
                    },
                    success:function(response){
                        if(response.status){
                            alert(response.msg);
                        }
                        else{
                            alert('please try again');
                        }
                    }
                })
            });

            $(document).on('keyup', "#newsSearch", function(e){
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
        });


    </script>
@endsection

