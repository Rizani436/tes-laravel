@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h1 class="h3 mb-3">Edit Task</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @csrf
                @method('PUT')
                @include('tasks._form')

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-link">Batal</a>
            </form>
        </div>
    </div>
@endsection
