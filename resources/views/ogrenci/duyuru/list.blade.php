<x-app-layout>
    <x-slot name="header">Duyurular</x-slot>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('duyurus.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Duyuru Oluştur</a>
        </h5>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Tarih</th>
                <th scope="col">Başlık</th>
                <th scope="col">Duyuru</th>
                <th scope="col">İşlemler</th>

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
   
</x-app-layout>