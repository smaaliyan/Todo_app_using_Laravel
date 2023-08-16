<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::all();
        return view('index')->with('todos', $todos);
    }
    public function create()
    {
        return view('create');
    }
    public function details(Todo $todo)
    {

        return view('details')->with('todos', $todo);
    }

    public function edit()
    {

        return view('edit');
    }
    public function update()
    {

        //we will write codes for updating a todo here

    }
    public function delete()
    {

        //we will write codes for deleting a todo here

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $todo = new Todo();

        $todo = new todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $request['name'];
        $todo->description = $request['description'];
        $todo->save();
        session()->flash('success', 'Todo created succesfully');
        return redirect('/');
    }
}
