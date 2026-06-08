<?php

namespace App\Http\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Resources\NoteResource;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;

class NoteApiController extends Controller
{
    public function index()
    {
        $per_page = request()->get('per_page');
        $order = request()->get('order', 'ASC');
        $column_order = request()->get('column_order', 'id');
        $query = Note::query()->orderBy($column_order, $order);
        $paginated = $query->paginate($per_page);

        if (request()->boolean('only_data')) {
            return response()->json([
                'data' => NoteResource::collection($paginated->items()),
            ]);
        }

        return NoteResource::collection($paginated);
    }

    public function store()
    {
        try {
            Note::query()->create([
                'title' => Request::input('title'),
                'description' => Request::input('description'),
                'group_id' => Request::input('group_id'),
            ]);

            return response()->json([
                'message' => 'Sucesso! Anotação salva.',
                'status' => 201,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Erro! Anotação não salva.',
                'status' => 422,
            ], 422);
        }
    }

    public function show(int $id)
    {
        $note = Note::find($id);

        if (! $note) {
            return response()->json([
                'message' => 'Erro! Anotação não encontrada.',
                'status' => 404,
            ], 404);
        }

        return new NoteResource($note);
    }

    public function trash()
    {
        $per_page = request()->get('per_page');
        $order = request()->get('order', 'ASC');
        $column_order = request()->get('column_order', 'id');
        $query = Note::query()->onlyTrashed()->orderBy($column_order, $order);
        $paginated = $query->paginate($per_page);

        if (request()->boolean('only_data')) {
            return response()->json([
                'data' => NoteResource::collection($paginated->items()),
            ]);
        }

        return NoteResource::collection($paginated);
    }

    public function search(HttpRequest $request)
    {
        $notes = Note::when($request->p, function ($q) use ($request) {
            $q->whereRaw('upper(title) LIKE upper(?)', ["%$request->p%"])
                ->orWhereRaw('upper(description) LIKE upper(?)', ["%$request->p%"]);
        })->get();

        if (! $notes) {
            return response()->json([
                'message' => 'Erro! Nenhuma anotação encontrada.',
                'status' => 404,
            ], 404);
        }

        return NoteResource::collection($notes);
    }

    public function update(HttpRequest $request, $id)
    {
        try {

            $note = Note::findOrFail($id);

            if (! empty($note)) {
                $note->update($request->all());
            }

            return response()->json([
                'message' => 'Sucesso! Anotação atualizado.',
                'status' => 201,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Erro! Anotação não atualizada. '.$th->getMessage(),
                'status' => 422,
            ], 422);
        }
    }

    public function destroy($id)
    {
        $note = Note::find($id);

        if (! $note) {
            return response()->json([
                'message' => 'Erro! Anotação não encontrada.',
                'status' => 404,
            ], 404);
        }

        $note->delete();

        return response()->json([
            'message' => 'Sucesso! Anotação deletada.',
            'status' => 200,
        ], 200);
    }

    public function destroyMultiples(HttpRequest $request)
    {
        $ids = json_decode($request->query('ids'), true);

        if (! is_array($ids) || empty($ids)) {
            return response()->json([
                'message' => 'Erro! Nenhum ID fornecido.',
                'status' => 400,
            ], 400);
        }

        $notas_deletadas = Note::whereIn('id', $ids)->delete();

        if ($notas_deletadas === 0) {
            return response()->json([
                'message' => 'Erro! Nenhuma anotação encontrada para deletar.',
                'status' => 404,
            ], 404);
        }

        return response()->json([
            'message' => 'Sucesso! Anotações deletadas.',
            'status' => 200,
        ], 200);
    }
}
