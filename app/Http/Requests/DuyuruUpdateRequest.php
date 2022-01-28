<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DuyuruUpdateRequest extends FormRequest
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
            'description'=>'required',
            'baslık'=>'required',
        ];
    }

    public function attributes(){
        return[
           'baslık'=>'Duyuru Başlığı',
           'description'=>'Duyuru Metni',
        ];
    }
}

