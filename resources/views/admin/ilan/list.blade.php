<x-app-layout>
    <x-slot name="header">Staj İlanları</x-slot>
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('ilans.create')}}" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> İlan Oluştur</a>
      
        </h5>
        <table class="table table-bordered">
            <thead>
              <tr class="table-secondary">
                <th scope="col">Tarih</th>
                <th scope="col">Başlık</th>
                <th scope="col">İlan</th>
                <th scope="col" style="width: 100px">İşlemler</th>

              </tr>
            </thead>
            <tbody>
                @foreach($ilans as $ilan)
              <tr class="table-light">
                <td>{{$ilan->tarih}}</td>
                <td>{{$ilan->baslık}}</td>
                <td>{{$ilan->description}}</td>
                <td>
                   <a href="{{route('ilans.edit',$ilan->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                   <a href="{{route('ilans.destroy',$ilan->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$ilans->links()}}
    </div>


</x-app-layout>