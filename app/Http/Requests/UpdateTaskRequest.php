<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'our_des' => [
                'required', 'string',
            ],
            'status' => [
                'required', 'string',
            ],
            'regionFormat' => [
                'required', 'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
