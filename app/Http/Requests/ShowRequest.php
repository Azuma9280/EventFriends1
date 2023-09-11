<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user.display_name' => 'required|stiring|max:30',
            'comment.content' => 'required|string|max:500',
        ];
    }
}
