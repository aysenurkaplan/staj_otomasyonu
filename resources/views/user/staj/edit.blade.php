<x-app-layout>
    <x-slot name="header">Staj Başvuru Güncelle </x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('stajs.update',$staj->id)}}" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Ad</label>
                    <input type="text" name="ad" class="form-control" value="{{$staj->ad}}">
                </div>
                <div class="form-group">
                    <label>Soyad</label>
                    <input type="text" name="soyad" class="form-control" value="{{$staj->soyad}}" >
                </div>
                <div class="form-group">
                    <label>Öğrenci No</label>
                    <input type="text" name="ogrenci_no" class="form-control" value="{{$staj->ogrenci_no}}" >
                </div>
                <div class="form-group">
                    <label>Bölüm</label>
                    <input type="text" name="bolum" class="form-control" value="{{$staj->bolum}}" >
                </div>
                <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" name="telefon" class="form-control" value="{{$staj->telefon}}" >
                </div>
                <div class="form-group">
                    <label> Firma Adı</label>
                    <input type="text" name="firma_ad" class="form-control" value="{{$staj->firma_ad}}" >
                </div>
                <div class="form-group">
                    <label>Firma Adresi</label>
                    <textarea name="firma_adres" class="form-control" rows="4" >{{$staj->firma_adres}}</textarea>
                </div>
                <div class="form-group">
                    <label>Başlangıç Tarihi</label>
                    <input type="date" name="baslangic_tarihi" class="form-control" value="{{$staj->baslangic_tarihi}}" >
                </div>
                <div class="form-group">
                    <label>Bitiş Tarihi</label>
                    <input type="date" name="bitis_tarihi" class="form-control" value="{{$staj->bitis_tarihi}}" >
                </div>
                <div class="form-group">
                    <label>Staj Yapılan Toplam Gün Sayısı</label>
                    <input type="text" name="toplam_gun" class="form-control" value="{{$staj->toplam_gun}}" >
                </div>
                <div class="form-group">
                    <label>Staj Türü(1.staj/2.staj)</label>
                    <input type="text" name="staj_turu" class="form-control" value="{{$staj->staj_turu}}" >
                </div>
                <div class="form-group">
                    <label>Staj Belgeleri</label>
                    <input type="file" name="belge" class="form-control"  >
                </div>
                <div class="mt-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" >Başvuruyu Güncelle</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</x-app-layout>