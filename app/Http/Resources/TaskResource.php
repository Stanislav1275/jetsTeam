<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
/** @mixin \App\Models\Task */
class TaskResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fio' => $this->user->name,
            'user_id' => $this->user_id,
            'our_des' => $this->our_des,
            'user_des' => $this->user_des,
            'regionFormat' => $this->regionFormat,
            'status' => $this->status,
            'date' => $this->date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
