@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach ($todos as $todo)
            <div class = "card">
                <div style="margin: 15px 30px">
                    <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
                </div>
            </div>
            <br>
        @endforeach
    @endif
@endsection
