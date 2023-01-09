<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //if rules are true, action is authorized and user will be created 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

    //form validation, we created an array and check each field, if there's any error it will be sent to the view
     //and there, there's an if condition concerning errors 
     //without these rules, user can't be created 
            
        'fname' => 'required', 
        'lname' => 'required', 
        'email' => 'required|email', //it will check if it is an valid email 
        'phonenumber' => 'required|integer'
    ]; 
    }
}
