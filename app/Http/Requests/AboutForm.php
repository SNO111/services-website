<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->is('about/create')) {
            return $this->CreateRules();
        } elseif ($this->is('about/update')) {
            return $this->UpdateRules();
        };

    }


    public function CreateRules()
    {
        return [
            'story_description' => 'required',
            'title_1' => 'required|max:100',
            'icon_1' => 'required',
            'short_text_1' => 'required'
        ];
    }

    public function UpdateRules()
    {
        return [
            'story_description' => 'required',
            'title_1' => 'required|max:100',
            'icon_1' => 'required',
            'short_text_1' => 'required'
        ];
    }

}
