<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Response;
use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Todo::all();
    }

    public function getAllActiveTodos()
    {
     return Todo::where('status', 'pending')->get();
    }
    public function getAllCompletedTodos()
    {
     return Todo::where('status', 'complete')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $todo = new Todo($request->all());
        $todo->save();
        return Response::json($todo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Todo::find($id);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $todo->task = $request->task;
        $todo->status = $request->status;
        $todo->save();
     
        return Response::json($todo);
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Todo::destroy($id);
    }


}
