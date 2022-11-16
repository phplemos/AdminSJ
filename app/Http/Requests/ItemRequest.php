<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
     * Get the validation rules that apply to the request. mimes:jpg,bmp,png
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_item' => 'required|string',
            'descricao_item' => 'required|',
            'quantidade_item' => 'required',
            'img_item' => 'required',
            'fk_inventario' => 'required',
            'fk_categoria' => 'required',
            '_token' => 'required'
        ];
    }
}
