<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title ?? 'Digicochage'}}</title>
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
 
    </style>
@livewireStyles
    </head>
<body class="bg-dark">
<header class="my-5 text-center">
<h1 class="text-white">Authentification</h1>

<img src="favicon.png" width="100" height="100" alt="" >

</header>

    <div class="container shadow bg-white mt-5 p-3" style="margin-bottom: 130px;">
    <form class="form" action ="{{route('login')}}"  method="post">
    @csrf
      <div class="form-group">
      <label class="email">Email:</label>
      <input type="email" name="email" class="form-control" required placeholder="Ex:aaaa@gmail.com">
      </div>

      <!--Mot de passe-->


      <div class="form-group ">
      <label class="mdp">Mot de passe:</label>
      <input type="password" name="password" id="mdp" required class="form-control" placeholder="Mot de passe" autocomplete="current-password">
      </div>
      <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="btn btn-dark" href="{{ route('password.request') }}">
                       Mot de passe oublier
                    </a>
                @endif

                <x-button class="btn btn-success">
                    {{ __('soumettre') }}
                </x-button>
            </div>
    </form>

    </div>
    

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{asset('js/app.js')}}"></script>   
 @livewireScripts
</body>
@include("partials.footer")
</html>
