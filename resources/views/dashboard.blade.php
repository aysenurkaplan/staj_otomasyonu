<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>

   <div class="row">
       <div class="col-md-9">
        <div class="list-group">
          <h2>Duyurular</h2>
            @foreach($duyurus as $duyuru)
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$duyuru->baslık}}</h5>
                <small>{{$duyuru->tarih}}</small>
              </div>
              <p class="mb-1">{{$duyuru->description}}</p>
              
            </a>
            @endforeach
            <div class="mt-2">
                {{$duyurus->links()}}
            </div>
          </div>
       </div>
       
       <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <a href="{{'$stajs.list'}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i>Staj İşlemleri</a>
          <div>
          </div>
   </div>
  
</x-app-layout>
