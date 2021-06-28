@extends("layouts.layout")

@section("content")
<main class="container-fluid">
<div class="mt-4">
 <img class=" shadow-sm rounded bd-placeholder-img" src="images/img1.png" style=" margin-bottom: 30px;margin-top: 30px; width: 100%; height:500px;">
 </div>


<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div style="font-family:Arial;" class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Plus de sujet papiers</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Fini les coups d'oeil</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Cocher n'importe où</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="row text-center">
    <h2 style="font-family:fantasy;letter-spacing:15px;" class="text-success">NOS TARIFS</h2>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Par mois</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title text-success pricing-card-title">1.000 CFA</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>QCM et QCD</li>
              <li>Examens</li>
             </ul>
            <a type="button" href="/abonnement" class="w-100 btn btn-lg btn-outline-success">Je m'abonne</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"> Par année</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title text-success pricing-card-title">10.000 CFA</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>QCM et QCD</li>
              <li>Examens</li>
              <li>20% Réduction</li>
            
            </ul>
            <a type="button" href="/abonnement"   class="w-100 btn btn-lg btn-outline-success">Je m'abonne</a>
          </div>
        </div>
      </div>
     </div>
     <div class="container">
     <h2 style="font-family:fantasy;letter-spacing:15px;" class="text-center  text-success">SUJETS RECENTS</h2>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($sujets as $sujet)
      <div class="col">
          <div class="card shadow-sm">
          <div class="card-header"><h5 class="card-title">{{$sujet->title}}</h5></div>
            <div class="card-body">
              <p class="card-text">
         <ul>
      <li>Nivau: {{$sujet->nivau}}</li>
      <li>UE: {{$sujet->ue}} </li>
      <li>Type: {{$sujet->type}}</li>
      </ul>
              </p>
    <a href="{{route('compo',['title'=> str_replace(' ','_',$sujet->title),'ue'=>$sujet->ue,'id'=>$sujet->id])}}" type="button" class="btn btn-sm btn-success">Je coche</a>

      </div>
      </div>
      </div>
      

      @endforeach

     </div>
     <div class="btn-group mt-2">
     <a href="{{route('demo',['title'=> str_replace(' ','_',$demo->title),'ue'=>$demo->ue,'id'=>$demo->id])}}" type="button" class="btn btn-sm btn-outline-success">Faire une demo</a>
    </div>
     </div>
</div>  
     
    </div>
<div class="m-5">



</div>

    </main>
@endsection