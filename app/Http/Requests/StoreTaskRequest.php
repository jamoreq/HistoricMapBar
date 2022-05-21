<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => [
                'required', 'string',
			'body' => [
                'required', 'text',
            ]
			
            ]
        ];
    }
}