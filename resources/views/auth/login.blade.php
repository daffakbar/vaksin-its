@extends('layouts.app')

@section('content')
<div class="container">
    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label>Email</label>
              <input
                id="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus
              />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input
                id="password"
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password"
                required
                autocomplete="current-password"
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- form-group -->
            <button type="submit" class="btn btn-az-primary btn-block">
              Sign In
            </button>
          </form>
        </div>
        <!-- az-signin-header -->

        <!-- az-signin-footer -->
      </div>
      <!-- az-card-signin -->
    </div>
</div>
@endsection
