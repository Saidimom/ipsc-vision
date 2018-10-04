<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;


class UserRequest extends FormRequest
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

    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();
        $validator->sometimes('login', 'unique:users', function($input) {
            if ($this->route()->hasParameter('user')){
                $model = User::withTrashed()->find($this->route()->parameter('user'));
                return ($model->login !== $input->login) && !empty($input->login);
            }
            return !empty($input['login']);
        });

        $validator->sometimes('email', 'unique:users', function($input) {
            if ($this->route()->hasParameter('user')){
                $model = User::withTrashed()->find($this->route()->parameter('user'));
                return ($model->email !== $input->email) && !empty($input->email);
            }
            return !empty($input['email']);
        });

        $validator->sometimes('password', 'required|min:6', function (){
            $method = $this->route()->methods()[0];
            return $method === 'POST' ? true : false;
        });
        return $validator;
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
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'login' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'password' => 'confirmed',
            'role_id' => 'required',
        ];
    }
}
