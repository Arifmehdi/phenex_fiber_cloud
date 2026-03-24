@extends('admin.master')

@section('body')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Company</h3>
                </div>
                <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.companies._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
