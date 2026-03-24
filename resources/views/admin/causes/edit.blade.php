@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Cause</h3>
                </div>
                <form action="{{ route('admin.causes.update', $cause->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.causes._form', ['cause' => $cause])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
