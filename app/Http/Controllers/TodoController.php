<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $todos = Todo::where('user_id',$userId)->get();
        $data = [
            'todos' => $todos
        ];

        return view ('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        Todo::create($request->all());

        return redirect('/home');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoRequest $request, Todo $todo)
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        $todo->update($request->all());

        return redirect('/home');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect('/home');
    }
}
