@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="">
        <div class="mb-3">
          @csrf
          <label for="formGroupExampleInput" class="form-label">Vous voullez changer la tache <span style="font-weight: 700">"{{$task->name}}"</span></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">edit task</button>
        </div>
      </form>
</div>
@endsection