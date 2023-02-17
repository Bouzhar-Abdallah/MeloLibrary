<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Log;


class todosController extends Controller
{
    public function index()
    {
        return view('welcome', ['listTodos' => Todo::all()]  );
    }
    public function saveItem(Request $request){
        
        $newTodo = new todo();
        $newTodo->todo = $request->todo;
        $newTodo->isdone = 0;
        $newTodo->save();
        /* Log::info(json_encode($request->all())); */
        return redirect('/');
        
    }
    public function markComplete($id){
        
        $todo = Todo::find($id);
        $todo->isdone = 1;
        $todo->save();
        /* Log::info(json_encode($request->all())); */
        return redirect('/');
        
    }
    public function delete($id){
        
        $todo = Todo::find($id);
        
        $todo->delete($id);
        
        /* Log::info(json_encode($request->all())); */
        return redirect('/');
        
    }
}
