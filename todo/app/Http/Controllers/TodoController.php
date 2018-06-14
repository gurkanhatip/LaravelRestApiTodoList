<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use App\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();

        return TodoResource::collection($todos);
    }

    public function completed_tasks()
    {
        $todos = Todo::where('is_completed', 1)->get();

        return TodoResource::collection($todos);
    }

    public function uncompleted_tasks()
    {
        $todos = Todo::where('is_completed', 1)->get();

        return TodoResource::collection($todos);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'task' => 'required|string'
        ]);

        $todo = Todo::create($valid);

        return new TodoResource($todo);
    }

    public function update($id, Request $request)
    {
        $valid = $request->validate([
            'is_completed' => 'required|boolean'
        ]);

        $todo = Todo::findOrFail($id);

        $todo->update($valid);

        return new TodoResource($todo);
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return new TodoResource($todo);
    }


    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
