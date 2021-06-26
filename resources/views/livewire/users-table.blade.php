<?php

use Faker\Generator;
use Faker\Provider\Color;

?>
<div>
  <div class="m-2">

  <input type="text" placeholder="rechercher ici" class="form-control" wire:model.debounce.500ms="search">

  </div>  
<div class="table-responsive">
        <table class="table table-light table-hover table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th wire:click="pagination('name')">#</th>
              <th wire:click="pagination('name')">nom & prenoms</th>
              <th wire:click="pagination('email')">email</th>
              <th wire:click="pagination('status')">status</th>
              <th wire:click="pagination('role')">Role</th>
              <th wire: click="pagination('created_at')">Créer le</th>
              


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
              <td>{{$user->created_at}}</td>
             
            </tr>
            @endforeach
          </tbody>
        </table>
   {{$users->links()}}

      </div>
</div>
