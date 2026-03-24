@extends('admin.master')

@section('body')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Company</h3>
                </div>
                <form action="{{ route('admin.companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.companies._form', ['company' => $company])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
