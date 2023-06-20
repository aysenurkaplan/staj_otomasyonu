<x-app-layout>
    <x-slot name="header">Duyurular</x-slot>
    <div class="row">
  <div class="col-sm-6">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('duyurus.create')}}" class="btn btn-sm btn-secondary"><i class="fa fa-plus"></i> Duyuru Oluştur</a>
      
        </h5>
        <table class="table table-bordered">
            <thead>
              <tr class="table-secondary">
                <th scope="col">Tarih</th>
                <th scope="col">Başlık</th>
                <th scope="col">Duyuru</th>
                <th scope="col" style="width: 100px">İşlemler</th>

              </tr>
            </thead>
            <tbody>
                @foreach($duyurus as $duyuru)
              <tr class="table-light">
                <td>{{$duyuru->tarih}}</td>
                <td>{{$duyuru->baslık}}</td>
                <td>{{$duyuru->description}}</td>
                <td>
                   <a href="{{route('duyurus.edit',$duyuru->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                   <a href="{{route('duyurus.destroy',$duyuru->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$duyurus->links()}}
    </div>
</div>
</div>
  <div class="col-sm-6">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> <h2>Staj Başvuruları</h2> </div>

    <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Ad</th>
                <th scope="col">Soyad</th>
                <th scope="col">Numara</th>
                <th scope="col" style="width: 100px">İşlemler</th>

              </tr>
            </thead>
<tbody>
  @foreach ($stajs as $staj)
  <tr>
      <td>{{$staj->ad}}</td>
      <td>{{$staj->soyad}}</td>
      <td>{{$staj->ogrenci_no}}</td>
       <td><p><a class="link-opacity-100" href="{{route('basvurular',$stajs)}}"> Detay Görüntüle</a></p></td>
    </tr>            
  @endforeach
</tbody>
 </table>
  {{ $stajs->links()}}

  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Staj İlanı</h5>
        <p class="card-text">Staj ilanı oluşturabilirsiniz.</p>
        <a href="{{route('ilans.create')}}" class="btn btn-light"><i class="fa fa-plus"></i> Staj İlanı Oluştur</a>
      </div>
    </div>


      
  </div>
    </div>
  
</x-app-layout>