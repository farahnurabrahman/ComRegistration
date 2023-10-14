@extends('include.layoutedit')
@section('tittle', 'login')
@section('content')
<div class="pagetitle">
  <h1>List of Company</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Company</li>
      <li class="breadcrumb-item active">Update Company</li>
    </ol>
  </nav>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Update Company</h5>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('PUT')
      <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
        <div class="col-sm-10">
          <input value="{{$company->name}}" type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input value="{{$company->email}}" type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-10">
          <input id="image" name="image" type="file" class="form-control">
          <img class="mt-2" src="/img/{{ $company->logo_path }}" width="100px">
        </div>
      </div>
      <div class="row mb-3">
        <label for="website" class="col-sm-2 col-form-label">Website</label>
        <div class="col-sm-10">
          <input value="{{$company->website}}" id="website" name="website" type="text" class="form-control" placeholder="Website">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary float-right">Update</button>
          <a type="button" class="btn btn-primary float-right" href="/companies">
          <span>Back</span>
        </a>
      </div>
    </div>
  </form>
</div>
</div>
@endsection
