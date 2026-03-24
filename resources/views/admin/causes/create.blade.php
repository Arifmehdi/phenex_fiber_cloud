@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Cause</h3>
                </div>
                <form action="{{ route('admin.causes.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.causes._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
