@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$todos->name}}</h5>
            <p class="card-text">{{$todos->description}}.</p>
            
            <div class="button-container">
                <a href="edit/{{$todos->id}}" class="btn btn-primary edit-button">Edit</a>
                
                <form action="{{ route('todos.destroy', ['todo' => $todos]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-button">Delete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
