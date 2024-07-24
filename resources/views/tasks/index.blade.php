@extends('layouts.app')

@section('content')

<h1>welcome</h1>

@foreach($tasks as $task)
<div class="row" style="margin-bottom: 20px">
    <div class="card col-sm-10 " >
        <div class="card-body">
            <p class="card-text">
                @if($task->isCompleted())
            <span class="badge text-bg-success">complet</span>
            @endif
                {{$task->name}} </p>
            <form action="/tasks/{{$task->id}}" method="POST">
                @method('PATCH')              
                @csrf
                @if(!$task->isCompleted())
                <button  class="btn btn-light" input="submit"> complet</button>    
                @endif
            </form>
        </div>  
    </div>
    @if($task->isCompleted())
    <div class="d-grid gap-1 col-sm-1 mx-4 " style="height: 10px; margin-top:-5px">
        <a href="{{route('edite', ['name'=> $task->name])}}" class="btn btn-success" style="width: 65%">edit</a>
        <form action="/tasks/{{$task->id}}" method="POST">
            @method('delete')
            @csrf
            <button class="btn btn-danger" input="submit">delete</button>
            </form> 
    </div>
    @elseif(!$task->isCompleted())
    <div class="d-grid gap-2 col-sm-1 mx-4 " style="height: 20px ; margin-top:15px">
        <a href="{{route('edite', ['name'=> $task->name])}}" class="btn btn-success" style="width: 65%">edit</a>
        <form action="/tasks/{{$task->id}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-danger" input="submit">delete</button>
        </form>
         
    </div>
    @endif
</div>
@endforeach

<a href="/tasks/create" class="btn btn-primary" >create task</button>

@endsection