<div id="carouselExampleFade" class="carousel slide my-5 rounded carousel-fade" data-bs-ride="carousel">
@foreach($images as $image)

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="...">
    </div>
     
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
