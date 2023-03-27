@extends('auth.layouts.app')

@section('content')
@section('title')
S'identifier | Gestion Location
@endsection
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>S'identifier</small>
              </div>
              <form role="form" method="POST" action="{{route('login')}}" >
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="E-mail" name="email" type="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="Mot de passe" name="password" type="password">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="form-check-input form-control-alternative" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">S'identifier</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="{{route('password.request')}}" class="text-light"><small>Mot de passe oublié?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="{{route('register')}}" class="text-light"><small>Créer un nouveau compte</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- fotter --}}
  </div>

@endsection

