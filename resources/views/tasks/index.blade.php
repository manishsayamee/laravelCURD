@extends('layout.app')

@section('section')
  <div style="margin-top: 40px; margin-bottom: 40px;">
    <h1>Task List</h1>
    @foreach($tasks as $task)
      <div class="card border-success style="margin-bottom: 20px;">
        <div class="card-body">
          <p>
              @if($task->isCompleted())
              <span class=" badge badge-success">Completed</span>
              @endif
            {{ $task->description}}
          </p> 
          @if(!$task->isCompleted())
          <form action='/complete/{{ $task->id }}' method="POST">
          @csrf
          @method('POST')
       
            <button class="btn btn-primary" input="submit">Complete</button>
   
          </form>
          <a href="/tasks/edit/{{ $task->id}}">update</a>

          @else
          <form action='/tasks/{{ $task->id }}' method='POST'>
          @csrf
          @method('DELETE')
          <button class='btn btn-danger' imput="submit">Delete</button>
          @endif

        </div>
      </div>
    @endforeach

    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>

  </div>
@endsection