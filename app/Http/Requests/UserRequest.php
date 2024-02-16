<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }


    public function rules(): array
    {
        return [
            'Mobile' => 'required',
            'Password' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'NickName' => 'required',
            'Address1' => 'required',
            'Address2' => 'required',
            'Area' => 'required',
            'Pincode' => 'required',
            'City' => 'required',
            'State' => 'required',
            'Country' => 'required',
            'Email' => 'required|email',
            'SecondNumber' => 'required',
            'Birthdate' => 'required|date',
            'AnniversaryDate' => 'required|date',
            'SpouseFirstName' => 'required',
            'SpouseLastName' => 'required',
            'SpouseBirthdate' => 'required|date',
            'SpouseNickName' => 'required',
        ];
    }
}
