<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks=Task::orderBy('completed_at')
                    ->orderBy('id', 'DESC')
                    ->get();
        dd($tasks);
        return view('tasks.index', [
            'tasks'=>$tasks,
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(){
        // $data =  request()->all();
        // $task = new Task();
        // $task->description=$data['description'];
        // $task->save();
        // return $data;
        // dd(request('description'));
        Task::create([

            'description'=>request('description'),

        ]);

        return redirect('/tasks');
    }

    public function complete($id) {
        $task = Task::where('id', $id)->first();
      
        $task->completed_at = now();
        $task->save();
      
        return redirect('/');

      }

    public function delete($id){
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('/');
        
    }
    public function update_data($id){
        dd(request('description'));
        $task =Task::where('id', $id)->first();
        $task->description = request('description');
        $task->save();

        return redirect('/tasks');
    }
    public function edit($id){
        
        // $task =Task::where('id', $id)->first();
        // $task->description = request('description');
        // $task->save();


        return view('tasks.update');
    }
}
