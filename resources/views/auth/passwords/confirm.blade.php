@extends('auth.layouts.app')

@section('content')
  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>Confirm Password</small>
            </div>
            <form method="POST" action="{{ route('password.confirm') }}">
             @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="password" name="password" type="password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="text-center d-flex flex-column">
                <button type="submit" class="btn btn-primary my-4">Confirm Password</button>
                @if(Route::has('password.request'))
                    <a href="{{route('password.request')}}">
                        Forgot Your Password?
                    </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


