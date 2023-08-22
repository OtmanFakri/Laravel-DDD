<?php

namespace Src\Plan\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PlanRequests extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'signup_fee' => 'required|numeric',
            'invoice_period' => 'required|integer',
            'invoice_interval' => 'required|string|in:day,week,month,year',
            'trial_period' => 'required|integer',
            'trial_interval' => 'required|string|in:day,week,month,year',
            'sort_order' => 'required|integer',
            'currency' => 'required|string|max:3',
            'features' => 'required|array', // Array of features
            'features.*.name' => 'required|string',
            'features.*.value' => 'required|numeric',
            'features.*.sort_order' => 'required|integer',
            // Define any other validation rules for Plan features
        ];
    }
}
