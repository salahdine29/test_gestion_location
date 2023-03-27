<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'string|nullable',
            'email'=>'email|nullable',
            'logo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'phone'=>'string|nullable',
            'address'=>'string|nullable',
            'description'=>'string|nullable',
        ];
    }
}
