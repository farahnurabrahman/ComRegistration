@extends('include.layoutcompany')
@section('tittle', 'login')
@section('content')
<div class="pagetitle">
  <h1>List of Company</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Company</li>
      <li class="breadcrumb-item active">View Company</li>
    </ol>
  </nav>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$company->name}}</h5> 
    <form action="#" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
        <div class="col-sm-10">
          <input value="{{$company->name}}" type="text" class="form-control" id="name" name="name" disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input value="{{$company->email}}" type="text" class="form-control" id="email" name="email" disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-10">
          <img class="mt-2" src="/img/{{ $company->logo_path }}" width="100px">
        </div>
      </div>
        <div class="row mb-3">
          <label for="website" class="col-sm-2 col-form-label">Website</label>
          <div class="col-sm-10">
            <input value="{{$company->website}}" id="website" name="website" type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10">
            <a type="button" class="btn btn-primary float-right" href="/companies">
              <span>Back</span>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection

