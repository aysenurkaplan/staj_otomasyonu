<x-app-layout>
 <x-slot name="header">Başvurular</x-slot>
 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> <h2>Staj Başvuruları</h2> </div>

    <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Ad</th>
                <th scope="col">Soyad</th>
                <th scope="col">Numara</th>
                 <th scope="col">Bölüm</th>
                  <th scope="col">Telefon</th>
                   <th scope="col">Firma Adı</th>
                    <th scope="col">Firma Adres</th>
                     <th scope="col">Başlangıç Tarihi</th>
                      <th scope="col">Bitiş Tarihi</th>
                       <th scope="col">Toplam Gün Staj</th>
                        <th scope="col">Staj Türü</th>
                         <th scope="col">Belgeler</th>
                <th scope="col" style="width: 100px">İşlemler</th>

              </tr>
            </thead>
<tbody>
  @foreach ($stajs as $staj)
  <tr>
      <td>{{$staj->ad}}</td>
      <td>{{$staj->soyad}}</td>
      <td>{{$staj->ogrenci_no}}</td>
      <td>{{$staj->bolum}}</td>
      <td>{{$staj->telefon}}</td>
      <td>{{$staj->firma_ad}}</td>
      <td>{{$staj->firma_adres}}</td>
      <td>{{$staj->baslangic_tarihi}}</td>
      <td>{{$staj->bitis_tarihi}}</td>
      <td>{{$staj->toplam_gun}}</td>
      <td>{{$staj->staj_turu}}</td>
      <td>{{$staj->belge}}</td>

       <td><a href="{{route('results.create',$staj->id)}}" class="btn btn-sm btn-danger">Değerlendir<i class="fa font-family"></i></a></td>
     </tr>           
  @endforeach
</tbody>
 </table>
  {{ $stajs->links()}}

   

</x-app-layout>