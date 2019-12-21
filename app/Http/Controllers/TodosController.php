<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index() {
        //$todos = Todo::all();
        //$todos = DB::table('todos')->paginate(3);
        $todos = Todo::paginate(3);
        return view('todos')->with('todos', $todos);
    }

    // New Todo
    public function new(Request $request) {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    // Delete Todo
    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }

    // Update Todo
    public function update($id) {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    // Edit Todo
    public function edit(Request $request, $id) {
        //dd($request->all());
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->route('todos');
    }

    // Completed Todo 
    public function completed($id) {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        return redirect()->back();
    } 


}
