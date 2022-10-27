@extends('layout.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
  
  
      @if (session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    
      
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    

    <main class="form-signin">
      <form action="/login" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">  Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid      @enderror" id="password" placeholder="password" required >
            <label for="password">  Password</label>
           @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
    
        <div class="checkbox mb-3">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mb-3">Not Registered? <a href="/register" class="text-decoration-none">Resgistrasi now</a> </small>
    </main>
      
  
  </div>
</div>

@endsection