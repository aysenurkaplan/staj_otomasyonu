<x-app-layout>
    <x-slot name="header">İlan Güncelle </x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('ilans.update',$ilan->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>İlan Tarihi</label>
                    <input type="datetime-local" name="tarih" class="form-control" value="{{$ilan->tarih}}">
                </div>
                <div class="form-group">
                    <label>İlan Başlığı</label>
                    <input type="text" name="baslık" class="form-control" value="{{$ilan->baslık}}" >
                </div>
                <div class="form-group">
                    <label>İlan Metni</label>
                    <textarea name="description" class="form-control" rows="5" >{{$ilan->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block" >İlan Güncelle</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>