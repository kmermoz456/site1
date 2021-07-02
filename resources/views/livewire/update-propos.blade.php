<div  class="bg-light"> 

<div class="my-1">
  <input type="text" class="form-control" placeholder="rechercher l'id de la proposition  ici" name="propos" wire:model.debounce.500ms="propo">
  </div>    
<div style="height: 200px; overflow:auto;">
     <table class="table table-striped table-hover">   
     <thead>
     <tr>
     <th>Identifiant</th>
     <th>Titre</th>
     <th>Point</th>
     <th>Id du parent</th>
     <th>Action</th>


     </tr>
     </thead>
     <tbody>
     @if(count($propos) == 0)
<tr>
<td colspan="5" class=" text-center text-danger">Aucune propositions trouvée</td>
</tr>
     @else
  @foreach($propos as $p)
  
  <tr>
          <td> {{$p->id}} </td>
          <td> {{$p->propos}} </td>
          <td>{{$p->point}} </td>
          <td> {{$p->question_id}}</td>
          <td> <a class="btn btn-outline-primary" href="?idp={{$p->id}}" >Modifier</a> </td>

          

</tr>
 @endforeach
 @endif
 </tbody>
            </table>
            </div>
 </div>