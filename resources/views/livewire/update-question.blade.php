<div  class="bg-light">
<div class="my-1">
  <input type="text" class="form-control" placeholder="rechercher l'id du sujet ici" wire:model.debounce.500ms="question">
  </div>   
  <div style="height: 200px; overflow:auto;" > 
     <table class="table table-striped table-hover">   
     <thead>
     <tr>
     <th>Identifiant</th>
     <th>Titre</th>
     <th>Point</th>
     <th>Nombre de bonne reponse</th>
     <th>Type</th>
     <th>Parent</th>
      <th>Action</th>


     </tr>
     </thead>
     <tbody>
     @if(count($questions) == 0)
<tr>
<td colspan="5" class="text-danger">Aucune question trouvée</td>
</tr>
     @else
  @foreach($questions as $q)
  <tr>
          <td> {{$q->id}} </td>
          <td> {{$q->tilte}} </td>
          <td>({{$q->point}}) </td>
          <td> {{$q->good_answers}}</td>
          <td> {{$q->type}}</td>
          <td> {{$q->sujet_id}}</td>
          <td> <a class="btn btn-outline-primary" href="?idq={{$q->id}}">Modifier</a> </td>


</tr>
 @endforeach
 @endif
 </tbody>
            </table>
  </div>
 </div>