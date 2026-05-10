<?php

namespace App\Actions;

use App\Models\Note;
use App\Resources\NoteResource;
use Lorisleiva\Actions\Concerns\AsAction;

class NoteActions
{
    use AsAction;

    // consulta (lógica de negócio / serviços)
    public function handle()
    {
        return NoteResource::collection(
            Note::query()
                ->orderBy('id', 'ASC')
                ->paginate(request()->get('per_page'))
        );
    }
}
