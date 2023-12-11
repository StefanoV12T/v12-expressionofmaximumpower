<nav class="navbar navbar-expand-lg " >
  <div class="container-fluid" >
      <div class="h-100">
        
        <a class="navbar-brand" href={{route('welcome')}}> <img class="img-fluid logo" src="{{asset('images/logov12.png')}}" alt=""> V12</a>
  </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{route('welcome')}}>Home-box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu grey-filter">
              <li><a class="dropdown-item text-white" href="#">Action</a></li>
              <li><a class="dropdown-item text-white" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Expression of Maximum Power</a>
          </li>
          @guest
          <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link" href="{{route('register')}}">Registrati</a></li>

    
@else
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
      aria-expanded="false">
      {{ auth()->user()->name }}
  </a>
  <ul class="dropdown-menu">
      <li>
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <div class="d-flex justify-content-center">
                  <button type="submit" class="">Esci
                      </button>
              </div>
          </form>
      </li>
  </ul>
</li>
<li>
  <a class="btn btn-warning mb-lg-0 mb-2 me-2 margin" href="">Scrivi recensione
    </a>
</li>

          @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>