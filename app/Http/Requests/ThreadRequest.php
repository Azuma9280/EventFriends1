<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'thread.title' => 'required|string|max:50',
            'user.display_name' => 'required|string|max:30',
            'thread.content' => 'required|string|max:500',
            'thread.delete_key' => 'required|digits:5',
        ];
    }
}
