<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staj extends Model
{
    use HasFactory;
    protected $fillable=['ad','soyad','ogrenci_no','bolum','telefon','firma_ad','firma_adres','baslangic_tarihi','bitis_tarihi','toplam_gun','staj_turu','belge'];
}
