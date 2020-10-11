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
        return [
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
            'picture_cover' => 'image|required|mimes:jpeg,png,jpg',
            'picture_cover' => 'image|required|mimes:jpeg,png,jpg',
            'cv_file' => 'file|required|mimes:pdf|max:1024',
            'linkedin_profile_path' => 'nullable|url',
            'github_profile_path' => 'nullable|url',
            'twitter_profile_path' => 'nullable|url',
            'about_info' => 'required',
            'profile_title' => 'required|max:255',
            'profile_meta' => 'required|max:255',
            'profile_meta_descriptions' => 'required|max:255',
            'smo_image' => 'nullable|image|mimes:jpeg,png,jpg',
        ];
    }
}
