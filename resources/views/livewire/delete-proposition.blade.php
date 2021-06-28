
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
              <th>ACTION</th>

              


            </tr>
          </thead>
          <tbody>
      @foreach($propos as $p)
            <tr>
         <td>#{{$p->id}}</td>    
         <td>{{$p->propos}}</td>    
         <td>{{$p->point}}</td>    
         <td><a href="{{route('delete',['action'=>'propo','id'=> $p->id])}}" class="btn btn-sm btn-outline-danger">Supprimer</a></td>    
  

      
                         
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
</div>
