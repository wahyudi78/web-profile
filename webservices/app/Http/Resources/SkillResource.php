<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->id,

            'users' => $this->users,
            'skill' => $this->skill,
            'image' => $this->image,
            'category' => $this->category,
            'status' => $this->status,
        ];
    }
}
