<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'blogName' => $this->name,
            'blogDescription' => $this->description,
            'image' => $this->image,
            'category' => new CategoryResource($this->category),
            // 'category_name' => $this->category->name,

        ];
    }
}
