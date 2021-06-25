@extends("layouts.layout")

@section("content")
<div class="container-fluid my-5">
<h1> sujet </h1>
<div class="album py-5 bg-light">
<div style="font-family: cursive;" class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

@foreach( $sujets as $sujet)
        <div class="col">
          <div class="card shadow-sm">
          <div class="card-header"><h3 class="card-title">{{$sujet->title}}</h3></div>
            <div class="card-body">
              <p class="card-text">
              <ul>
              <li>NIVEAU: {{strtoupper($sujet->nivau)}}</li>
              <li>UE: {{strtoupper($sujet->ue)}}</li>
              <li>TYPE:{{strtoupper($sujet->type)}}</li>

              </ul>
              
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('compo',['title'=> str_replace(' ','_',$sujet->title),'ue'=>$sujet->ue,'id'=>$sujet->id])}}" type="button" class="btn btn-sm btn-outline-success">Je coche</a>
                 </div>
                <small class="text-muted"> Ajouter le {{$sujet->created_at->format('d-j-Y')}}</small>
              </div>
            </div>
          </div>
        </div>
 @endforeach       
</div>

</div>
</div>
</div>
   


@endsection