<x-app-layout>
    <x-slot name="header">Staj İlanları</x-slot>
   
<div class="card">
    <div class="card-body">
        
        <table class="table table-bordered">
            <thead>
              <tr class="table-danger">
                <th scope="col">Tarih</th>
                <th scope="col">Başlık</th>
                <th scope="col">İlan</th>
                

              </tr>
            </thead>
            <tbody>
                @foreach($ilans as $ilan)
              <tr class="table-warning">
                <td>{{$ilan->tarih}}</td>
                <td>{{$ilan->baslık}}</td>
                <td>{{$ilan->description}}</td>
               
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$ilans->links()}}
    </div>


</x-app-layout>