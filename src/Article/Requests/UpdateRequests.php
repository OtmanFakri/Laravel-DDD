<?php

namespace Src\Article\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequests extends FormRequest
{

    public function authorize() : bool
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'title' => [
                'nullable',
                'string',
                'max:255',
                'min:3'],

            'body' => [
                'nullable',
                'string'],

           // 'user_id' => [
            //    'required',
             //   'exists:users,id',],
        ];
    }
}
