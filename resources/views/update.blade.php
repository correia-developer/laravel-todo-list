@extends('layout')

@section('wrapper')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('todo.edit', ['id' => $todo->id]) }}" method="POST">
                    <div class="form-group">
                        @csrf
                        <input type="text" class="form-control" value="{{ $todo->todo }}" name="todo">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection