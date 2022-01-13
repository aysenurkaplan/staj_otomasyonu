<x-app-layout>
    <x-slot name="header">Duyuru Oluştur </x-slot>
    
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
                    <input type="text" name="baslık" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Duyuru Metni</label>
                    <textarea name="description" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" >Duyuru Oluştur</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>