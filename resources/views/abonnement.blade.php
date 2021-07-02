<?php
use Illuminate\Support\Facades\Auth;


?>
@extends("layouts.layout")

@section('content')
@auth <div class="mt-5 container text-center alert alert-success">Bonjour Mr/Mlle <b> {{Auth::user()->name}}</b> bienvenu sur la page d'abonnement</div>@endauth
<div class="container my-5" style="font-family: Arial;">
<div class="alert alert-danger mt-2" role="alert">
  <h4 class="alert-heading"><ion-icon name="warning-outline"></ion-icon>&nbsp; Instructions  </h4>
  <p>Après votre inscription vous ne pourrez pas jouire des services de DigiCochage pour cela il va falloir vous abonnez!</p>
  <hr>
  <p class="mb-0">L'abonnement en ligne n'étant pas encore disponible, nous vous prions de prendre contact avec l'etudiant K. Kouame Mermoz (coordonnées ci-dessous)</p>
  <ul style="list-style: none;">
  <li><ion-icon name="school-outline"></ion-icon>&nbsp; Universite : Nangui Abrogoua</li>
  <li><ion-icon name="book-outline"></ion-icon>&nbsp; Nivau:Licence 2 SN</li>
  <li><ion-icon name="call-outline"></ion-icon>&nbsp; Numero: +225 07 87 12 44 76</li>

  </ul>
  <h5>Vous aurez à payer une somme de 1.000 CFA par mois avec lui</h5>

  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><ion-icon name="help-outline"></ion-icon>&nbsp; Pourquoi un abonnement de 1.000 CFA </h4>
  <p>
  S'abonner Digicochage, c'est soutenir la création de nouveaux contenus chaque semaine et accéder à du contenu exclusif pour bien réviser c'est cours, QCM et QCD. 
  </p>
</div>
</div>
 <div  class="row">
  <h4>Nous contacter si vous n'avez pas de crédit appel</h4>
    <form class="form" method="post" action="{{route('message',['idd'=>1,'ide'=>Auth::user()->id,'direction'=>'help'])}}">
    @csrf
    <div class="form-group">
    <label for="author">Nom</label>
   <input type="text" id="author" class="form-control" name="author" placeholder="votre nom" value="{{Auth::user()->name ?? ''}}" required>
    </div>
    <div class="form-group">
    <label for="msg">Message</label>
    <textarea style="height:200px" id="msg" class="form-control" name="message"></textarea>
    </div>
    <button class="btn shadow-sm btn-success mt-2" type="submit">Envoyer</button>
    </form>
 </div>
</div>
@endsection