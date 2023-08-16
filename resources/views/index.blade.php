@extends('layouts.app')
@section('title', 'My Todo App')

@section('content')
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item {{ $todo->completed ? 'completed-row' : '' }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a>
                        
                        <div class="d-flex">
                            {{-- Mark as Completed Form --}}
                            <form action="{{ route('todos.markCompleted', ['todo' => $todo]) }}" method="POST" class="mark-completed-form">
                                @csrf
                                @method('PATCH') {{-- Assuming you'll use a PATCH request for marking as completed --}}
                                <button type="submit" class="btn btn-success btn-sm">Mark as Completed</button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
