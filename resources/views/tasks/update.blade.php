@extends('layout.app')

@section('section')
<h1>New Task</h1>
    <form method="POST" action="/update">
    @csrf
      <div class="form-group">
        <input type="hidden" name="id" value={{ $data['id'] }}>
        <label for="description">Update Task</label>
        <input class="form-control" name="description" value="{{$data['description']}}" required />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>      
    </form>
@endsection