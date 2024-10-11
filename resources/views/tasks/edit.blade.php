@extends('template')
@section('content')
<form action="{{ route('tasks.update',$task->id) }}" method="post">
  {{ csrf_field() }}
  @method('PUT')
  Task name:
  <br />
  <input type="text" name="name" value="{{ $task->name }}"/>
  <br /><br />
  Task description:
  <br />
  <textarea name="description" > {{ $task->description }}</textarea>
  <br /><br />
  Start time:
  <br />
  <input type="date" name="task_date" class="date" value="{{ $task->task_date }}" />
  <br /><br />
  <input type="submit" value="Save" />
</form>

@endsection