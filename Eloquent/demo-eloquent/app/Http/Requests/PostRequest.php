<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            //
            "title" => "required|min:6|max:20",
            "content" => "required",
            "user_id" => "required|numeric"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Tiêu đề không được để trống.",
            "title.min" => "Tiêu đề tối thiểu phải có 6 ký tự.",
            "title.max" => "Tiêu đề tối đa 20 ký tự.",
            "content.required" => "Content không được để trống.",
            "user_id.required" => "User id không được để trống.",
            "user_id.numeric" => "User id phải là số.",
        ];
    }
}
