@extends('layout')

@section('wrapper')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('todo.new') }}">
                    <div class="form-group">
                        @csrf
                        <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
                    </div>
                </form>

                @foreach ($todos as $todo)
                    {{ $todo->todo }} 
                    <a href="{{ route('todo.delete',['id' => $todo->id]) }}" class="btn btn-danger btn-sm">X</a>
                    <a href="{{ route('todo.update',['id' => $todo->id]) }}" class="btn btn-secondary btn-sm">Edit</a>
                    @if(!$todo->completed)
                        <a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-success btn-sm">Mark as completed</a>
                    @else
                        <span class="text-success">Completed</span>
                    @endif
                    <hr>
                @endforeach

                <?php echo $todos->render(); ?>
            </div>
        </div>
    </div>
   
@stop