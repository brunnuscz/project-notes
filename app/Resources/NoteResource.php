<?php

namespace App\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    // formato (transformação / serialização) uma camada de apresentação de dados. o ideal é retornar o dado bruto
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'group' => [
                'id' => $this->group?->id,
                'title_group' => $this->group?->title_group,
                'color' => $this->group?->color,
            ],
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
