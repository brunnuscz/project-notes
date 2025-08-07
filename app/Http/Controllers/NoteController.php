<?php

namespace App\Http\Controllers;

use App\Actions\NoteActions;
use App\Resources\NoteResource;
use Inertia\Inertia;

class NoteController extends Controller
{
    public function index()
    {
        $notes = NoteActions::run();

        return Inertia::render('Note', [
            'notes' => NoteResource::collection($notes)
        ]);
    }
}