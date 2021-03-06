<?php
 use Illuminate\Support\Facades\Auth;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Konan koouame mermoz">
  <meta name="generator" content="Page admin">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <title>Dashboard Template · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <!-- Bootstrap core CSS -->


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*
 * Sidebar
 */

    .sidebar {
      position: fixed;
      top: 0;
      /* rtl:raw:
  right: 0;
  */
      bottom: 0;
      /* rtl:remove */
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 48px 0 0;
      /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
 * style de la barre de navigation
 */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }
  </style>
  @livewireStyles

</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Accueil</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input disabled class="form-control bg-dark form-control-dark w-100" type="text" value=" <?=Auth::user()->name?>">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="/logout">Deconnexion</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">

  
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="bg-success nav-item">
              <a class="nav-link text-white" aria-current="page" href="/admin">
              <ion-icon name="speedometer-outline"></ion-icon>
                Tableau de bord
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isset($action) && $action === 'add_sujet' ? 'text-success':''}} " href="{{route('user',['action'=>'update-user'])}}">
              <ion-icon name="add-circle-outline"></ion-icon>
                Modifier mes Informations personnelles
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isset($action) && $action === 'add_sujet' ? 'text-success':''}} " href="{{route('user',['action'=>'notifications'])}}">
              <ion-icon name="add-circle-outline"></ion-icon>
                Notifications
              </a>
            </li>
          </ul>

         
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tableau de bord</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-success">Exporter en pdf</button>
            </div>
           
          </div>
        </div>
       
       @if(isset($action))
       @if($action === 'notifications')
       @include('messageuser')

       @elseif($action === 'update-user')
       @include('update-user')
      @else
    
       @endif

       @else
       <h2>Informations personnelles</h2>
       
        <form class="row g-3" style="font-size: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
  <div class="col-auto">
    <label for="nom" class="visually">Nom & prenoms</label>
    <input type="text" style="font-weight: 800;" readonly class="form-control" id="nom" value="<?=Auth::user()->name?>">
  </div>

  <div class="col-auto">
    <label for="email" class="visually">Email</label>
    <input type="email" readonly class="form-control" id="nom" value="<?=Auth::user()->email?>">
  </div>

  <div class="col-auto">
    <label for="nom" class="visually">Nivau</label>
    <input type="text" readonly class="form-control" id="nom" value="<?=strtoupper(Auth::user()->nivau)?>">
  </div>
  <hr>

  <div class="col-auto">
    <label for="nom" class="visually">Télephone</label>
    <input type="text" readonly class="form-control" id="nom" value="<?=Auth::user()->numero?>">
  </div>

  <div class="col-auto">
    <label for="email" class="visually">Résidence</label>
    <input type="email" readonly class="form-control" id="nom" value="<?=Auth::user()->city?>">
  </div>

  <div class="col-auto">
    <label for="nom" class="visually">Ecole</label>
    <input type="text" readonly class=" text-success form-control" id="nom" value="Universite Nangui abrogoua">
  </div>

  <div class="col-auto">
    <label for="nom" class="visually">status</label>
    <input type="text" readonly class=" {{Auth::user()->status ? 'text-success' : 'text-danger'}} form-control" id="nom"
     value="{{Auth::user()->status ? 'abonner' : 'non abonner'}}">
  </div>
  
</form>

   @if(!Auth::user()->status)
   <div class="mt-2">

  <a  href="{{route('non.abonner')}}" class="btn btn-sm btn-dark shadow-sm">Demander un abonnement</a>
  </div>

  @endif


    <hr>
     
  
    @endif


  </main>
 
    </div>
  </div>


  <script src="{{asset('js/app.js')}}"></script>

  @livewireScripts
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>