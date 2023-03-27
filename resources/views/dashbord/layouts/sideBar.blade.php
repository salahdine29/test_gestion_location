<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand text-primary" href="{{route('dashbord.index')}}">
      @if($setting->logo == null)
      <img src="{{asset('assets')}}/img/brand/logo-car.png" alt="" width="200" height="350">
      @else
      <img src="{{$setting->logo}}" alt="" width="200" height="350">
      @endif
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/800px-User_icon_2.svg.png">
  
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a href="{{route('dashbord.profile')}}" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>My profile</span>
          </a>
          <a href="{{route('dashbord.setting')}}" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>Settings</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#!" class="dropdown-item">
           
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
              </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
            </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{route('dashbord.index')}}">
              @if($setting->logo == null)
              <img src="{{asset('assets')}}/img/brand/logo-car.png" alt="" width="200" height="350">
              @else
              <img src="{{$setting->logo}}" alt="" width="200" height="350">
              @endif
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
     
      <!-- Navigation -->
        <ul class="navbar-nav mt-5">
          <li class="nav-item  active p-2 my-1">
            <a class="nav-link  active " href="{{route('dashbord.index')}}">
              <i class="ni ni-tv-2 text-primary"></i> Tableau de bord
            </a>
          </li>
          <li class="nav-item p-2 my-1">
            <a class="nav-link active " href="./examples/icons.html">
              <i class="ni ni-calendar-grid-58 text-purple"></i> Reservations
            </a>
          </li>
          <li class="nav-item p-2 my-1">
            <a class="nav-link active " href="./examples/maps.html">
              <i class="ni ni-single-02 text-orange"></i> Client
            </a>
          </li>
          
          <li class="nav-item pl-2 my-1" >
            <a class="nav-link active "  href="./examples/tables.html">
              <i class="ni ni-bus-front-12 text-red"></i> Voiture
            </a>
          </li>
          <li class="nav-item p-2 my-1">
            <a class="nav-link active" href="./examples/tables.html">
              <i class="ni ni-pin-3 text-red"></i> GPS
            </a>
          </li>
          <li class="nav-item p-2 my-1">
            <a class="nav-link active " href="{{route('dashbord.profile')}}">
              <i class="ni ni-badge text-orange"></i> Information
            </a>
          </li>
          <li class="nav-item p-2 my-1">
            <a class="nav-link active " href="{{route('dashbord.setting')}}">
              <i class="ni ni-settings-gear-65 text-gray"></i> Paramètres
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item active active-pro" >
            <a 
            class="nav-link" 
            href="{{route('logout')}}"
            onclick="event.preventDefault();document.getElementById('form-logout').submit();">
              <i class="ni ni-button-power"></i> 
              Se déconnecter
            </a>
            <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>    
    </div>
  </div>
</nav>

