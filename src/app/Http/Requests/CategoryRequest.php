<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'bb' => ['required','string','max:10','unique:categories,name'],
        ];
    }

    public function messages(){
        return[
            'bb.required' => 'カテゴリを入力してください',
            'bb.string' => 'カテゴリを文字列で入力してください',
            'bb.max' => 'カテゴリを10文字以下で入力してください',
            'bb.unique' => 'カテゴリが既に存在しています',
        ];
    }
}
