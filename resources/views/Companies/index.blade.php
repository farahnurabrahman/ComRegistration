@extends('include.layoutcompany')
@section('tittle', 'login')
@section('content')
<div class="pagetitle">
  <h1>List of Company</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Company</li>
      <li class="breadcrumb-item active">List of Company</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
      <a href="{{route('companies.create')}}" class="btn btn-primary rounded-pill float-end">
          <i class="bi bi-plus"></i> Add New Company</a>
        <h5 class="card-title">List of Company</h5>
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website Link</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($companies as $index => $val)
              <tr>
                <td>{{++$index}}</td>
                <td><img alt="img" src="/img/{{ $val->logo_path }}" width="50px"> {{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->website }}</td>
                <td><form id="del_event" action="{{ route('companies.destroy',$val->id) }}" method="POST">
                  {{ csrf_field()  }}
                  @method('DELETE')
                  <a class="btn btn-sm btn-success" href="{{route('companies.show', $val->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="View Company"><i class="bi bi-eye-fill"></i></a>
                  <a class="btn btn-sm btn-warning" href="{{route('companies.edit', $val->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit company"><i class="bi bi-pencil-square"></i></a>
                  <a type="submit" id="del_id" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete company"><i class="bi bi-trash"></i></a>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>    
@endsection
