@extends('layouts.app')

@section('title', 'Tambah Task')

@section('content')
    <h1 class="h3 mb-3">Tambah Task</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                @include('tasks._form')

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-link">Batal</a>
            </form>
        </div>
    </div>
@endsection
