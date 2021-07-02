<div class="containner p-3">
<input type="text" class=" my-2 form-control" placeholder="Recherche d'image ici" name="image" wire:model.debounce.500ms='image' >

<table class="table table-hover table-striped">
    <tr>
    <th># Id</th>
    <th>Chemin</th>
    <th>Type</th>
    <th>Date de création</th>

    </tr>
    @if(count($images)==0)
    <tr>
    <td class="text-center" colspan="4"> Aucune image</td>
    </tr>
    @else
@foreach($images as $images)
<tr>
<td>{{$image->id}}</td>
<td>{{$image->path}}</td>
<td>{{$image->type}}</td>
<td>{{$image->created_at}}</td>
</tr>

@endforeach
@endif
</table>
 {{$images->links()}}   
</div>
