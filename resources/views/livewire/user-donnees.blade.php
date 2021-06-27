
<div>
  <div class="m-2">

<input type="text" class="form-control" name="search" placeholder="Recherche par nom" wire:model.debounce.500ms="search"/>

  </div>  
<div class="table-responsive">
        <table class="table table-light table-hover table-striped table-bordered table-sm">
          <thead>
            <tr>
            <!-- <x-table-header :direction="$orderDirection" name="id" :field="orderField" >#</x-table-header>
            -->


           <th wire:click="setorderField('id')">#</th>
              <th wire:click="setorderField('name')" >nom & prenoms</th>
              <th wire:click="setorderField('email')">email</th>
              <th wire:click="setorderField('status')">status</th>
              <th wire:click="setorderField('admin')">Role</th>
              <th wire:click="setorderField('numero')" >numero</th>
           
              


            </tr>
          </thead>
          <tbody>
      @foreach($users as $user)
            <tr>
            <td>   <span style="width:100%; height:100%; background-color: #<?=$user->color?> ;" class=" p-1 bd-placeholder-img  text-white  rounded-circle" >{{$user->id}}</span> </td>
             
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              @if($user->status)
              <td class="text-success">Actif</td>
              @else
              <td class="text-danger">Inactif</td>
              @endif
              @if($user->admin)
              <td class="text-success">Administrateur</td>
              @else
              <td class="text-danger">Utilisateur</td>
              @endif
              <td>{{$user->numero}}</td>
             
            </tr>
            @endforeach
          </tbody>
        </table>
  
{{$users->links()}}
      </div>
</div>
