<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//to authorize the modification of a user if rules were true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fname' => 'required', 
            'lname' => 'required', 
            'email' => 'required|email|unique:users,email, ' . request()->id, 
            //it will check if it is unique, 
            //so function rules will refer to the users table in the database to check so.
            //so if we update the email with an email that already exists it won't authorize us. 
            //and check the email if it belongs to that user id so it will let it pass and ignore it. 
            'phonenumber' => 'required|integer'
        ];
    }
}
