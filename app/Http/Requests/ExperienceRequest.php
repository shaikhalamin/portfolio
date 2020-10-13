<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
        $rules = [
            'company_name' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',
            'company_location' => 'required',
            'company_city' => 'required',
            'company_country' => 'required',
            'company_website' => 'nullable|url',
            'project_website' => 'nullable|url',
            'designation' => 'required',
            'job_type' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'nullable|date',
            'job_responsibility' => 'required',
            'work_stack' => 'required',
        ];

        return $rules;
    }
}
