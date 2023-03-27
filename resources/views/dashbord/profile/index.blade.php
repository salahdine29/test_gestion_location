@extends('dashbord.layouts.app')
@section('content')
@section('title')
Profile | gestion location
@endsection
{{-- <div class="d-flex justify-content-center mt-5">  --}}
  <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0 mt-4">
    <div class="card card-profile shadow">
      <div class="row justify-content-center">
        <div class="col-lg-3 ">
          <div class="card-profile-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/800px-User_icon_2.svg.png" class="rounded-circle">
          </div>
        </div>
      </div>
  
      <div class="card-body mt-4 ">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">
              </div>
            </div>
          </div>
          <div class="text-center">
            <h3>
              {{Auth::user()->name}}
            </h3>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>{{$setting->address}}
            </div>
            <div class="h5 mt-4">
              {{Auth::user()->email}} <span class="font-weight-light">{{$setting->phone}}</span> 
            </div>
            
            <div>
              <i class="ni education_hat mr-2"></i>{{$setting->name}}
            </div>
            <hr class="my-4" />
            <p>{{$setting->description}}.</p>
          </div>
      </div>
    </div>
  </div>

@endsection