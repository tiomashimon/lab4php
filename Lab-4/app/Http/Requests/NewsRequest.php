<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'short_description' => 'required|max:255',
            'content' => 'required',
            'publication_date' => 'required|date',
            // Add more validation rules as needed
        ];
    }
}

