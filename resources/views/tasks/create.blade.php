@extends('layouts.app')


@section('content')
<form method="POST" action="/">
  <div class="mb-3">
    @csrf
    <label for="formGroupExampleInput" class="form-label">Example label</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Example input placeholder">
  </div>
  <div class="mb-3">
    <button class="btn btn-primary" type="submit">create task</button>
  </div>
</form>
@endsection