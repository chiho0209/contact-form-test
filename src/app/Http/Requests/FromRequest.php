<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumper;

class FromRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required' ,
            'first_name' => 'required',
            'last_name' => 'required ',
            'gender' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'building' => 'nullabel',
            'category' => 'required',
            'content' => 'integer|max:120',
            
        ];
    }

        public function messages()
    {
         return [
             'name' => 'お名前を入力してください',
             'email' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'password' => 'パスワードを入力してください',
             'first_name' => '名を入力してください', 
             'last_name' => '姓を入力してください', 
             'gender' => '性別を選択してください',
             'tel' => '電話番号を入力してください',
             'address' => '住所を入力してください',
             'category' => 'お問い合わせの種類を選択してください',
             'content' => 'お問い合わせの内容を入力してください',
             'content.max' => 'お問合せ内容は120文字以内で入力してください',

    ];
    }
}
