 <x-app-layout>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Staj Başvurusu</h5>
        <p class="card-text">Formdaki bilgileri doğru bir biçimde doldurup belgelerinizi yükleyebilirsiniz. Belgeniz pdf. formatında olmalı ve 1024 mb'ı geçmemelidir.</p>
        <a href="{{route('stajs.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Yeni Staj Başvurusu</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Staj İşlemleri</h5>
        <p class="card-text">Son başvuru tarihine kadar belgelerinizde düzenleme veya silme işlemi yapabilirsiniz başvuru süresi dolduktan sonra bu işlem kullanıma kapatılacaktır. Girilen bilgilerin doğruluğunun sorumluluğu öğrenciye aittir.</p>
      @foreach($stajs as $staj ) 
        <a href="{{route('stajs.edit',$staj->id)}}" class="btn btn-primary"><i class="fa fa-pen"></i>Başvuruyu Düzenle</a>
        <a href="{{route('stajs.destroy',$staj->id)}}" class="btn btn-danger"><i class="fa fa-times"></i>Başvuruyu Temizle</a>
@endforeach

      </div>
    </div>
  </div>
</div> 
<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt">Classroom Mesleki Staj Dersi sınıf kodu: </span></strong><span style="font-size:12.0pt">gxw5yfk</span></span></span></p>

<p>&nbsp;</p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/EN%20SON_BilgisayarM%c3%bchendisli%c4%9fi_StajY%c3%b6nergesi%20(1).pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt">Bilgisayar M&uuml;hendisliği Staj Y&ouml;nergesi</span></strong></span></span></a></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt">Staj Başvuru Evrakları</span></strong></span></span></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/CCF02032023.pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Zorunlu Staj Belgesi</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/%c3%9ccretlerine_%c4%b0%c5%9fsizlik_Fonu_Katk%c4%b1s%c4%b1_%c3%96%c4%9frenci_ve_%c4%b0%c5%9fveren_Bilgi_Formu.pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Staj &Uuml;cretlerine İşsizlik Fonu Katkısı &Ouml;ğrenci ve İşveren Bilgi Formu</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/Staj_Sa%c4%9fl%c4%b1k_Hizmetleri_Bildirim_Formu.pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Staj Sağlık Hizmetleri Bildirim Formu</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/Staj_Ba%c5%9fvuru_Formu_TR_Konya_Teknik_%c3%9cniversitesi.pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Staj Başvuru Formu (TR)</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/Staj_Ba%c5%9fvuru_Formu_EN_Konya_Teknik_%c3%9cniversitesi.pdf"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Staj Başvuru Formu (EN)</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/Beyan%20Dilek%c3%a7esi.pdff"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Beyan Dilek&ccedil;esi</span></span></span></a></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt">Staj Evrakları</span></strong></span></span></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/ickapak.xlsx"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">İ&ccedil; Kapak</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/deftersayfa.docx"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Defter Sayfa</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/pratiksicilfisi.docx"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Pratik Sicil Fişi</span></span></span></a></p>

<p><a href="https://www.ktun.edu.tr/Dosyalar/1020/files/kapak.docx"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Kapak</span></span></span></a></p>

</x-app-layout>