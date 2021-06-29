
<div class="container">

     <h3>Image pour le slider</h3>

    <form class="row form" method="post" action="{{route('storage',['action'=>'slider'])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-auto border p-1">
    <label for="slider" class="input-label">Telecharger une image</label>
    <input type="file" accept="image/png,image/jpeg" name="slider" id="slider" class="form-file" >
    </div>
    <button type="submit"class="mx-1 col-1 btn-secondary btn">Envoyer</button>
    </form>
    <h3>Images du site</h3>

    <form class="row form" method="post" action="{{route('storage',['action'=>'image'])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-auto border p-1">
    <label for="input-label">Telecharger un document</label>
    <input type="file" name="image" class="form-file" accept="image/png ,image/jpeg" >
    </div>
    <button type="submit"class="mx-1 col-1 btn-secondary btn">Envoyer</button>
    </form>

    <h3>Video</h3>


    <form class="row form" method="post" action="{{route('storage',['action'=>'video'])}}" enctype="multipart/form-data">
    @csrf
    <div class="col-auto border p-1">
    <label for="input-label">Telecharger une video</label>
    <input type="file" class="form-file" >
    </div>
    <button type="submit"class="mx-1 col-1 btn-secondary btn">Envoyer</button>
    </form>


</div>