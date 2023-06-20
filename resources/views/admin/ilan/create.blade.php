<x-app-layout>
    <x-slot name="header">İlan Oluştur </x-slot>
 <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('ilans.store')}}">
                @csrf
                <div class="form-group">
                    <label>İlan Tarihi</label>
                    <input type="datetime-local" name="tarih" class="form-control" >
                </div>
                <div class="form-group">
                    <label>İlan Başlığı</label>
                    <input type="text" name="baslık" class="form-control" value="{{old('baslık')}}" >
                </div>
                <div class="form-group">
                    <label>İlan Metni</label>
                    <textarea name="description" class="form-control" rows="5" >{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block" >İlan Oluştur</button>
                </div>

            </form>
        </div>
    </div>
    
    </div>
</div>
   
</x-app-layout>