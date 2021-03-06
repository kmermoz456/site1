<div>
 <h3 class="text-center">Message reçu</h3>
 <div class="container p-5 bg-light">
 <table class="table table-dark table-striped">
 <tr>
 <th>N°</th>
 <th>Message</th>
 <th>Expéditeur</th>
 <th>Date d'expedition</th>
 <th>Action</th>


 </tr>
 <tbody>
    @foreach($messages as $message)
        <tr>

    <td>{{$message->id}}</td>
    <td>{{$message->message}}</td>
    <td>{{$message->user->name}} id: {{$message->user_id}}</td>
    <td>{{$message->created_at}}</td>
    <td><a href="?repondre&amp;id={{$message->user_id}}" class="btn btn-light">Répondre</a></td>


        </tr>
    @endforeach
    </tbody>
    </table>
    {{$messages->links()}}
    @if(isset($_GET['repondre']))
    <form class="form mb-5" method="post" action="{{route('message',['ide'=>1,'idd'=>$_GET['id'],'direction'=>'rep'])}}">
    @csrf
    <div class="form-group">
    <label for="id">Identifiant de l'Expéditeur</label>
    <input type="text" disabled id="id" name="destinataire" value="{{htmlentities($_GET['id'])}}" class="number" placeholder="identifiant ici">
    </div>
    <div class="form-group">
    <label for="id">Message</label>
    <textarea  required style = "height:300px; font-family:monospace;" class="form-control" name ="message" id="id" class="form-number" placeholder="Message ici"></textarea>
    </div>
    <button class="mt-2 btn btn-secondary shadow-sm" type="submit">Repondre</button>
    </form>
    @endif
 </div>
</div>
