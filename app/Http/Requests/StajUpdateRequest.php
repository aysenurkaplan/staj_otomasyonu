<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StajUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ad'=>'required',
            'soyad'=>'required',
            'ogrenci_no'=>'required',
            'bolum'=>'required',
            'telefon'=>'required',
            'firma_ad'=>'required',
            'firma_adres'=>'required',
            'baslangic_tarihi'=>'required',
            'bitis_tarihi'=>'required',
            'toplam_gun'=>'required',
            'staj_turu'=>'required',
            'belge'=>'required|file|max:1024|mimes:pdf',
        ];
    }

    public function attributes()
    {
        return [
            'ad'=>'Ad',
            'soyad'=>'Soyad',
            'ogrenci_no'=>'Öğrenci No',
            'bolum'=>'Bölüm',
            'telefon'=>'Telefon',
            'firma_ad'=>'Firma Adı',
            'firma_adres'=>'Firma Adres',
            'baslangic_tarihi'=>'Staj Başlangıç Tarihi',
            'bitis_tarihi'=>'Staj Bitiş Tarihi',
            'toplam_gun'=>'Staj Yapılan Toplam Gün',
            'staj_turu'=>'Staj Türü',
            'belge'=>'Belge',
        ];
    }
}


