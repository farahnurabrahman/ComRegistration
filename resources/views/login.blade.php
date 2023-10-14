@extends('include.layoutbase')
@section('tittle', 'login')
@section('content')
<div class="container">
<div class="pt-4 pb-2">
  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
  <p class="text-center small">Enter your email & password to login</p>
</div>
<div>
<form action="{{route('login.post')}}" method="POST" class="row g-3 needs-validation" novalidate>
@csrf
<div class="col-12">
  <label for="email" class="form-label">Email</label>
  <div class="input-group has-validation">
    <input type="text" name="email" class="form-control" id="email" required>
    <div class="invalid-feedback">Please enter your username.</div>
  </div>
</div>
<div class="col-12">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="password" required>
  <div class="invalid-feedback">Please enter your password!</div>
</div>
<div class="col-12">
  <button class="btn btn-primary w-100" type="submit">Login</button>
</div>
</form>
</div>
@endsection



                  
