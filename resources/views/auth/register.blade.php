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

      /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  
  padding-top: 3rem;

}

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

}

    </style>
@livewireStyles
    </head>
<body class="bg-light">
<div class="container-fluid">
<header class="text-center mt-2">
<h1>Inscription</h1>
</header>
   
<div class="container my-5 p-5 bg-white rounded shadow-sm">
<div class="row">
@if ($errors->any())
    <div>
        <div class="text-danger">
            {{ __('Whoops! Des erreurs.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</div>

<form class="row g-3 needs-validation"  method="post" action="{{route('register')}}">
@csrf
 <!--name -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom & Prenoms <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="validationCustom01" name="name" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 <!--email -->
  
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email <span class="text-danger">*</span></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
      
    </div>
  </div>
 <!--phone -->

  <div class="col-md-3">
  <label for="validationCustomUsername" class="form-label">Telephone <span class="text-danger">*</span></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend"><ion-icon name="call-outline"></ion-icon> &nbsp; +225 </span>
      <input type="text" maxlength="10" class="form-control" name="numero" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      
    </div>
  </div>

 <!--city -->

  <div class="col-md-6">
    <label for="city" class="form-label">Commune de r??sidence <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name ="city" id="city" required>
    
  </div>
 <!--password -->

  <div class="col-md-6">
    <label for="mdp" class="form-label">Mot de passe <span class="text-danger">*</span></label>
    <input type="password" class="form-control" name ="password" id="mdp" required autocomplete="new-password">
    
  </div>
 <!--password_confirmation -->

  <div class="col-md-6">
    <label for="mdpc" class="form-label">Confirmation du mot de passe <span class="text-danger">*</span></label>
    <input type="password" class="form-control" name ="password_confirmation" value="" id="mdpc" required>
    
  </div>

 <!--nivau -->

  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Nivau <span class="text-danger">*</span> </label>
    <select class="form-select" name="nivau" id="validationCustom04" required>
      <option selected  value="sn1">Licence 1 (SN1)</option>
      <option   value="sn2">Licence 2 (SN2)</option>
      <option>Autre</option>
    </select>
   
  </div>
  <div class="col-md-12">
 <small class="text-muted">Tous les champs muni d'un <span class="text-danger">*</span> devant sont obligatoires</small>
 </div>
 
  <div class="col-12">
    <div class="form-check">
      <input checked class="form-check-input" name="condition" type="checkbox" value="true" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        En vous s'inscrivant vous acceptez nos <a class="text-success" href="/conditions-utilisation" >conditions d'utilisations </a>
      </label>
      <div class="invalid-feedback">
        <!--Pour les erreurs-->
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-success" type="submit">Je m'inscrit</button>
    <a class="btn btn-secondary" href="{{route('login')}}">j'ai d??j?? un compte</a>

  </div>
</form>
<div class="alert alert-danger mt-2" role="alert">
  <h4 class="alert-heading"><ion-icon name="warning-outline"></ion-icon>&nbsp; Information utile </h4>
  <p>Apr??s votre inscription vous ne pourrez pas jouire des services de DigiCochage pour cela il va falloir vous abonnez!</p>
  <hr>
  <p class="mb-0">L'abonnement en ligne n'??tant pas encore disponible, nous vous prions de prendre contact avec l'etudiant K. Kouame Mermoz (coordonn??es ci-dessous)</p>
  <ul style="list-style: none;">
  <li><ion-icon name="school-outline"></ion-icon>&nbsp; Universite : Nangui Abrogoua</li>
  <li><ion-icon name="book-outline"></ion-icon>&nbsp; Nivau:Licence 2 SN</li>
  <li><ion-icon name="call-outline"></ion-icon>&nbsp; Numero: +225 07 07 87 12 44 76</li>

  </ul>
  <p>Vous aurez ?? payer une somme de 1.000 CFA par mois avec lui</p>

  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><ion-icon name="help-outline"></ion-icon>&nbsp; Pourquoi un abonnement de 1.000 CFA </h4>
  <p>
  S'abonner Digicochage, c'est soutenir la cr??ation de nouveaux contenus chaque semaine et acc??der ?? du contenu exclusif pour bien r??viser c'est QCM et QCD et s'am??liorer (comme le t??l??chargement des vid??os et des sources). 
  </p>
</div>
</div>
</div>

</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{asset('js/app.js')}}"></script>   
 @livewireScripts
</body>

</html>
