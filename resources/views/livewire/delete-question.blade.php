
<div class="mt-2">
  <div class="m-2">

  <input type="text" placeholder="Recherche avec UE" class="form-control" wire:model.debounce.500ms="search">

  </div>  
 
<div class="table-responsive " style="overflow: auto; height:500px">
        <table class="table table-light table-hover table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th>IDENTIFIANT</th>
              <th>TITRE</th>
              <th>POINT</th>
              <th>Nombre de bonne de reponse</th>
              <th>TYPE</th>
              <th>ACTION</th>

              


            </tr>
          </thead>
          <tbody>
      @foreach($questions as $q)
            <tr>
         <td>#{{$q->id}}</td>    
         <td>{{$q->tilte}}</td>    
         <td>{{$q->point}}</td>    
         <td>{{$q->good_answers}}</td>    
         <td>{{$q->type}}</td> 
         <td><a href="{{route('delete',['id'=> $q->id,'action'=>'question'])}}" class="btn btn-sm btn-outline-danger">Supprimer</a></td>    
 

      
                         
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
</div>
