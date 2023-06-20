<x-app-layout>
    <x-slot name="header">Cevap Oluştur </x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST"  action="{{route('results.store',$staj->id)}}">
                @csrf
                
                <div class="form-group">
                    <label>Cevabınız:</label>
                    <input type="text" name="answer" class="form-control" value="{{old('answer')}}" >
                </div>
                <div class="form-group">
                    <label>Açıklama</label>
                    <textarea name="description" class="form-control" rows="5" >{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" >Cevap Oluştur</button>
                </div>

            </form>
        </div>
    </div>
    

</x-app-layout>