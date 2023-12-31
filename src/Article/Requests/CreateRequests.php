<?php

namespace Src\Article\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequests extends FormRequest
{

    public function authorize() : bool
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                'min:3'],

            'body' => [
                'required',
                'string'],

           // 'user_id' => [
            //    'required',
             //   'exists:users,id',],
        ];
    }
}
