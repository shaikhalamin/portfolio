<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $rules =  [
            'full_name' => 'bail|required',
            'cv_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'date_of_birth' => 'required|date',
            'cityzenship' => 'required',
            'maritial_status' => 'required',
            'designation' => 'required',
            'specialized_at' => 'required',
            'linkedin_profile_path' => 'nullable|url',
            'github_profile_path' => 'nullable|url',
            'twitter_profile_path' => 'nullable|url',
            'about_info' => 'required',
            'profile_title' => 'required|max:255',
            'profile_meta' => 'required|max:255',
            'profile_meta_descriptions' => 'required|max:255',

        ];

        if ($this->request->has('cv_file') && $this->request->cv_file && !is_null($this->request->cv_file)) {
            $rules['cv_file'] = 'file|required|mimes:pdf|max:1024';
        }

        if ($this->request->has('smo_image') && $this->request->smo_image && !is_null($this->request->smo_image)) {
            $rules['smo_image'] = 'nullable|image|mimes:jpeg,png,jpg';
        }

        if ($this->request->has('picture_cover') && $this->request->picture_cover && !is_null($this->request->picture_cover)) {
            $rules['picture_cover'] = 'image|required|mimes:jpeg,png,jpg';
        }

        if ($this->request->has('picture_about') && $this->request->picture_about && !is_null($this->request->picture_about)) {
            $rules['picture_about'] = 'image|required|mimes:jpeg,png,jpg';
        }

        return $rules;
    }
}
