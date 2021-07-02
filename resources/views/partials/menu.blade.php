    
<?php 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

?>
  <nav  class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{Storage::url('images/icon.png')}}" width="80" height="60" > </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul style="font-family:Arial ; " class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('sujet',['nivau'=>'sn1'])}}">SN licence 1</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{route('sujet',['nivau' => 'sn2'])}}">SN licence 2</a>
        </li>
      </ul>
      @guest
        <div class="d-flex px-2 mb-1">
      <a href="/register" class=" mx-1 btn btn-outline-success">Créer un compte</a>
      <a href="/login" class=" mx-1 btn btn-success">Se connecter</a>
      </div>
      @endguest
      @auth
      <div class="dropdown">
  <a class=" text-white nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <ion-icon name="person-circle-outline"></ion-icon>  <?=Auth::user()->name ?> 
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="/admin">Tableau de bord</a></li>
    <li><a class="dropdown-item" href="/admin">Notifications</a></li>
    <li><a class="dropdown-item" href="{{route('logout')}}">Deconnexion</a></li>
  </ul>
</div>
      @endauth
      
    </div>
  </div>
</nav>
