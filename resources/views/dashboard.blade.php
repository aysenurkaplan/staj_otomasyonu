<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>

     
  <div class="row">
  <div class="col-sm-6">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/uploads/kampus_devam.jpg" alt="First slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="/uploads/kampus_giris.jpg" alt="Second slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="/uploads/kampus_devam.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

 
</div>
  </div>

<div class="col-sm-6">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> <h2>Duyurular</h2> </div>

<div class="list-group">
  @foreach ($duyurus as $duyuru)
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$duyuru->baslık}}</h5>
      <small></small>
    </div>
    <p class="mb-1">{{$duyuru->description}}</p>
    <small></small>
  </a>
  @endforeach
  {{ $duyurus->links()}}
</div>
</div>
</x-app-layout>