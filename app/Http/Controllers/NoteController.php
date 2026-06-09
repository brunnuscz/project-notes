<?php

namespace App\Http\Controllers;

use App\Actions\GroupActions;
use App\Actions\NoteActions;
use App\Resources\GroupResource;
use App\Resources\NoteResource;
use Inertia\Inertia;

class NoteController extends Controller
{
    public function index()
    {
        $notes = NoteActions::run();
        $groups = GroupActions::run();

        return Inertia::render('Note', [
            'notes' => NoteResource::collection($notes),
            'groups' => GroupResource::collection($groups),
        ]);
    }
}
