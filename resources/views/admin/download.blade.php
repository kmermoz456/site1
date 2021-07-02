
<div class="container">

     <h3>Image pour le slider</h3>

    <form class="row form" method="post" action="{{route('storage',['action'=>'slider'])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-auto border p-1">
    <label for="slider" class="input-label">Telecharger une image</label>
    <input type="file" accept="image/png,image/jpeg" name="slider" id="slider" class="form-file" >
    </div>

    <div class="form-group">
    <label class="input-label" for="title">Titre</label>
    <input type="text" class="form-control" id="text" name="title">
    </div>
    <div class="form-group">
    <label class="input-label" for="text">Texte</label>
    <input type="text" class="form-control" id="text" name="text">
    </div>
    <div class="form-group">
    <label class="input-label" for="type">type</label>
    <input type="text" class="form-control" id="text" name="type">
    </div>

    <button type="submit"class="my-2 col-1 btn-secondary btn">Envoyer</button>
    </form>
    

    


</div>