<x-app-layout>
    <x-slot name="header">Duyurular</x-slot>
    <div class="row">
  <div class="col-sm-6">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('duyurus.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Duyuru Oluştur</a>
             <a href="{{route('ilans.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> İlan Oluştur</a>
        </h5>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Tarih</th>
                <th scope="col">Başlık</th>
                <th scope="col">Duyuru</th>
                <th scope="col" style="width: 100px">İşlemler</th>

              </tr>
            </thead>
            <tbody>
                @foreach($duyurus as $duyuru)
              <tr>
                <td>{{$duyuru->tarih}}</td>
                <td>{{$duyuru->baslık}}</td>
                <td>{{$duyuru->description}}</td>
                <td>
                   <a href="{{route('duyurus.edit',$duyuru->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
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
      <td>{{$staj->ad}}</td>
      <td>{{$staj->soyad}}</td>
      <td>{{$staj->ogrenci_no}}</td>
       <td><p><a class="link-opacity-100" href="{{route('basvurular')}}"> Detay Görüntüle</a></p></td>
                
  @endforeach
</tbody>
 </table>
  {{ $stajs->links()}}
jhjhhjbhjbhb İlan Oluştur.
    <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('duyurus.store')}}">
                @csrf
                <div class="form-group">
                    <label>Duyuru Tarihi</label>
                    <input type="datetime-local" name="tarih" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Duyuru Başlığı</label>
                    <input type="text" name="baslık" class="form-control" value="{{old('baslık')}}" >
                </div>
                <div class="form-group">
                    <label>Duyuru Metni</label>
                    <textarea name="description" class="form-control" rows="5" >{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" >Duyuru Oluştur</button>
                </div>

            </form>
        </div>
    </div>


  </div>
    </div>
</x-app-layout>