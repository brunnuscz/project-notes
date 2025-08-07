<?php

namespace App\Actions;

use App\Resources\NoteResource;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Models\Note;

class NoteActions
{
    use AsAction;
    
    // consulta (lógica de negócio / serviços)
    public function handle()
    {
        return NoteResource::collection(
            Note::query()
                ->orderBy('id','ASC')
                ->paginate(request()->get('per_page'))
        );
    }
}
