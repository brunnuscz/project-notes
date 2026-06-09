<?php

namespace App\Actions;

use App\Models\Group;
use App\Resources\GroupResource;
use Lorisleiva\Actions\Concerns\AsAction;

class GroupActions
{
    use AsAction;

    // consulta (lógica de negócio / serviços)
    public function handle()
    {
        return GroupResource::collection(
            Group::query()
                ->orderBy('id', 'ASC')
                ->paginate(request()->get('per_page'))
        );
    }
}
