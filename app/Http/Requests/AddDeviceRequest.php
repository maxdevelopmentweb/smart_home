<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class AddDeviceRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:24',
        ];
    }
}
