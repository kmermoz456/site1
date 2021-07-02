<div style="height: 200px; overflow:auto;">
<div class="my-1">
  <input type="text" class="form-control" placeholder="rechercher l'id du sujet ici" wire:model.debounce.500ms="sujet">
  </div>    
     <table class="table table-striped table-hover">   
     <thead>
     <tr>
     <th>Identifiant</th>
     <th>Titre</th>
     <th>Nivau</th>
     <th>UE</th>
     <th>Type</th>
     <th>Action</th>

     </tr>
     </thead>
  @foreach($sujets as $sujet)
  <tr>
          <td> {{$sujet->id}} </td>
          <td> {{$sujet->title}} </td>
          <td>({{$sujet->nivau}}) </td>
          <td> {{$sujet->ue}}</td>
          <td> {{$sujet->type}}</td>
          <td> <a class="btn btn-outline-primary" href="?ids={{$sujet->id}}">Modifier</a> </td>


</tr>
 @endforeach
 
            </table>
 </div>