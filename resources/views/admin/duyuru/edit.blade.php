<x-app-layout>
    <x-slot name="header">Duyuru Güncelle </x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('duyurus.update',$duyuru->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Duyuru Tarihi</label>
                    <input type="datetime-local" name="tarih" class="form-control" value="{{$duyuru->tarih}}">
                </div>
                <div class="form-group">
                    <label>Duyuru Başlığı</label>
                    <input type="text" name="baslık" class="form-control" value="{{$duyuru->baslık}}" >
                </div>
                <div class="form-group">
                    <label>Duyuru Metni</label>
                    <textarea name="description" class="form-control" rows="5" >{{$duyuru->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" >Duyuru Güncelle</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>