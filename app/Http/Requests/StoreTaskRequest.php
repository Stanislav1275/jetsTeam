<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'regionFormat' => ['required', 'string'],
            'our_des' => ['required', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return Gate::allows('task_access');
    }
}
