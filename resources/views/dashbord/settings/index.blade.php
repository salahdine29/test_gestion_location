@extends('dashbord.layouts.app')
@section('content')
@section('title')
Paramètres | gestion location
@endsection
<div class="m-5">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Paramétres </h3>
          </div>
          <div class="col-4 text-right">
            <button class="btn btn-sm btn-primary">Paramétres</button>
          </div>
        </div>
      </div>
      
      <div class="card-body">
        <form method="POST" action="{{route('setting.update',$setting->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <h6 class="heading-small text-muted mb-4">INFORMATIONS SUR LE SITE</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Nom site</label>
                  <input type="text" id="input-username" class="form-control form-control-alternative" name="name" placeholder="name" value="{{$setting->name}}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Address E-mail</label>
                  <input type="email" id="input-email" class="form-control form-control-alternative" name="email" placeholder="jesse@example.com" value="{{$setting->email}}" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="logo">logo</label>
                  <input type="file" id="logo" name="logo" class="form-control form-control-alternative dropify " value="">
                </div>
              </div>
              <div class="col-lg-6">
                <img src="{{$setting->logo}}" width="300" height="150" class="mt-5"/>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">COORDONNÉES</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="phone">Théléphone</label>
                  <input id="phone" class="form-control form-control-alternative" placeholder="+212 672 7816 36"  name="phone" type="text" value="{{$setting->phone}}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="adress" >adrress</label>
                  <input type="text" id="adress" class="form-control form-control-alternative" placeholder="address" name="address" value="{{$setting->address}}">
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Description -->
          <h6 class="heading-small text-muted mb-4">About me</h6>
          <div class="pl-lg-4">
            <div class="form-group">
              <label>About Me</label>
              <textarea rows="4" class="form-control form-control-alternative"   name="description">{{$setting->description}}</textarea>
            </div>
          </div>
          <div class="col-md-12">
              <button class="btn btn-primary"  type="submit">valider</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection