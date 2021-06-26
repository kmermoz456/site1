<?php


 function checkbox($name,$value,$array)
 {
  $checked = "";
  if(isset($array[$name]) &&  in_array($value,$array[$name]))
    {
    $checked = "checked";
    
    }
    return $checked;

 }

  function radio($name,$value,$array)
 {
  $checked = "";
  if(isset($array[$name]) && $array[$name] == $value)
  {
    $checked = "checked";
  }
  return $checked;
    
 }
?>

@extends("layouts.layout")

@section("content")
<div class="container-fluid w-100">

<div class="row align-items-md-stretch">
      <div class="col">
        <div class="h-100 p-5 text-center text-white bg-dark rounded">
          <h2>UE:{{ $ue ? strtoupper($ue) : ''}}</h2>
          <h2>Titre:{{ $title ? strtolower(str_replace('_',' ',$title)): ''}}</h2>
          <h2 class="text-center">NOTE</h2>
          <h1 style="font-family: fantasy; color:cornflowerblue; font: size 100px;"><span class="{{$total > 0 ? 'text-success' :'text-danger' }}"> {{$total}} </span> /30</h1>
          </div>
      </div>
      

</div>
     

<div class="album py-5">
<div style="font-family: Arial;" class="container">
 <form class="form row row-cols-1  g-3" method="post" action="{{route('check',['title' =>$title,'ue'=> $ue,'id' => $id ])}}">
 @csrf
@foreach($questions as $nq=>$q)
        <div class="col">
          <div class="card shadow-sm">
          <div class="card-header"><h5 class="card-title">{{($nq+1).') '.$q->tilte}}</h5></div>
            <div class="card-body">
              <p class="card-text">
              <ul style="list-style: none;">
            @if($q->type == "QCD")
            <li> <label class="form-radio-label" for="p1{{$q->id}}">
             <input <?= radio($q->id,"1",$_POST) ?>   class=" btn-outline-success form-radio-input" id="p1{{$q->id}}" type="radio" value="1" name="{{$q->id}}">
            Vrai @if($show) @if($q->point == 0)
             <span class="text-success">
             <ion-icon name="checkmark-done-outline">
             </ion-icon></span> 
             @else
             <span class="text-danger"><ion-icon name="close-outline"></ion-icon></span> 
             @endif
             @endif
            </label>
            </li>
            <li> <label class="form-radio-label" for="p2{{$q->id}}">
             <input <?= radio($q->id,"0",$_POST)?>  class=" btn-outline-success form-radio-input" id="p2{{$q->id}}" type="radio" value="0" name="{{$q->id}}">
             Faux @if($show) 
             @if($q->point == 0) <span class="text-success">
             <ion-icon name="checkmark-done-outline">
             </ion-icon></span> 
             @else
             <span class="text-danger"><ion-icon name="close-outline"></ion-icon></span> 
             @endif
            @endif
            </label>
            </li>
            @else
            @foreach($q->proposition as $np => $p)
            <li> <label class="form-check-label" for="{{$nq}}p{{$np}}">
             <input <?= checkbox($q->id,$p->id,$_POST)?> class=" btn-outline-success form-check-input" id="{{$nq}}p{{$np}}" type="checkbox" value="{{$p->id}}" name="{{$q->id}}[]" > 
             {{$p->propos}}
             @if($show) @if($p->point >0) <span class="text-success h5">v</span> @else<span class="text-danger h5">x</span>  @endif @endif
             </label>
            </li>
            
            @endforeach
              </ul>
              
              </p>
            @endif 
            </div>
          </div>
        </div>
        @endforeach
        <button class="shadow btn mt-4 btn-outline-success" type="submit">Soumettre</button>
        <a href="" class="shadow btn mt-1 btn-outline-secondary" type="reset">Recommencer</a>
       
        </form>
</div>

</div>
</div>

   


@endsection