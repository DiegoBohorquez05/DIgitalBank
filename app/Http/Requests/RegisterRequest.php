<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//autorizar o no que una solicitud avance
class RegisterRequest extends FormRequest
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
    //se manda a llamar hacia RegisteController 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required  |unique:users,email',
            'username'=>'required | unique:users,username',
            'password'=>'required | min:8',
            'password_confirmation'=>'required | same:password',
        ];
    }
}