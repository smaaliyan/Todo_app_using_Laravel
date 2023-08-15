<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Validation\ValidationException;
    
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('index')->with('todos', $todos);
    
    }
    public function create(){
        return view('create');
    }
    public function details(Todo $todo){

        return view('details')->with('todos', $todo);
    
    }
    
    public function edit(){
    
        return view('edit');
    
    }
    public function update(){
    
        //we will write codes for updating a todo here
    
    }
    public function delete(){
    
        //we will write codes for deleting a todo here
    
    }

    public function store(){


        try {
            $this->validate(request(), [
                'name' => 'required',
                'description' => 'required'
            ]);
        } catch (ValidationException $e) {
            dd('Validation failed:', $e->getMessage());
        }


        $name = request()->input('name');
        $description = request()->input('description');
        dd(request()->all());

        // Make sure the array is not null before accessing its elements
        if (isset($data['name']) && isset($data['description'])) {
            $todo = new Todo();

        $todo = new todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $name['name'];
        $todo->description = $description['description'];
        $todo->save();
        session()->flash('success', 'Todo created succesfully');
        return redirect('/');
        

    }








}
}